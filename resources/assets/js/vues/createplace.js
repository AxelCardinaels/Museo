function debounce(fn, delay = 300) {
	var timeoutID = null;

    return function () {
		clearTimeout(timeoutID);

        var args = arguments;
        var that = this;

        timeoutID = setTimeout(function () {
        	fn.apply(that, args);
        }, delay);
    }
};

// this is where we integrate the v-debounce directive!
// We can add it globally (like now) or locally!
Vue.directive('debounce', (el, binding) => {
	if (binding.value !== binding.oldValue) {
		// window.debounce is our global function what we defined at the very top!
		el.oninput = debounce(ev => {
			el.dispatchEvent(new Event('change'));
		}, parseInt(binding.value) || 300);
	}
});

Vue.config.keyCodes.comma = 188;

if( $('.vue--create-place').length ){
  var createPlace = new Vue({
      el: '.vue--create-place',

      data:{
        adresses:'',
        adress:'',
        adresse:'',
        showAdresses:0,
        selected:'',
				state : null,
				country : null,
				tags : '',
				savedTags : [],
      },

			mounted: function(){
				this.getOldTags();
			},

      methods:{
        searchPlace : function(){
          if(this.adress != ''){
            var slug = this.adress.replace(/ /g,"+");
            var response = axios.get("https://maps.googleapis.com/maps/api/geocode/json?address="+slug+"&key=AIzaSyAd2Q4qMy26JC9g2qziOsNzYoFujuKjTLA")
            .then(response => this.adresses = response.data);

            if(this.adresses.status == "ZERO_RESULTS"){
              this.adresses = "nope";
            };
            $(".select--adress").find('option:eq(0)').prop('selected', false);
            $(".select--adress").find('option:eq(0)').prop('selected', true);
            this.showAdresses = 1;
          }else{
            this.showAdresses = 0;
          }
        },

        updateLocalisation : function(){
          var index = this.indexWhere(this.adresses.results, search => search.place_id === $(".select--adress").val());
					if(extractFromAdress(this.adresses.results[index].address_components, "administrative_area_level_2")){
						$(".state--hidden").val(extractFromAdress(this.adresses.results[index].address_components, "administrative_area_level_2"));
					}else{
						$(".state--hidden").val(extractFromAdress(this.adresses.results[index].address_components, "administrative_area_level_1"));
					}

					$(".country--hidden").val(extractFromAdress(this.adresses.results[index].address_components, "country"));
					$(".adresse--city").val(extractFromAdress(this.adresses.results[index].address_components, "locality"));
					$(".adresse--number").val(extractFromAdress(this.adresses.results[index].address_components, "street_number"));
          $(".adresse--hidden").val(this.adresses.results[index].formatted_address);
          $(".geo--hidden").val([this.adresses.results[index].geometry.location.lat, this.adresses.results[index].geometry.location.lng]);

        },

        indexWhere: function(array, conditionFn) {
          const item = array.find(conditionFn);
          return array.indexOf(item);
        },

				addTag : function(){
					var currentTag = this.tags.replace(',','');
					if(currentTag.replace(/\s/g, '').length) {
						this.savedTags.push(currentTag);
						$(".tags--all").val(this.savedTags);
					}
					this.tags = '';
				},

				deleteTag : function(index){
					this.savedTags.splice(index,1);
					$(".tags--all").val(this.savedTags);
				},

				getOldTags : function(){
					var oldTags = $(".tags--all").val();
					oldTags = oldTags.split(',');
					if(oldTags[0] != ""){
						this.savedTags = this.savedTags.concat(oldTags);
					}
				},

      },
  });

	$(document).on("keypress", ":input:not(textarea):not([type=submit])", function(event) {
	  if (event.keyCode == 13) {
	      event.preventDefault();
	  }
	});

};
