if( $('.vue--search').length ){
  var search = new Vue({
      el: '.vue--search',

      data:{
        categories : [],
        markers : [],
        madeMarkers : [],
        search : $(".search__bar").val(),
        category : '',
        note : '',
        filters : true,
        baseUrl : $(".baseurl").text(),
      },

			mounted : function(){
        this.getCategories();
        this.getMarkers();
			},

      methods:{
        makeMarkers : function(){
          var bounds = new google.maps.LatLngBounds();
          var titles = [];
          var informations = [];
          var that=this;

          for (var i = 0; i < this.madeMarkers.length; i++) {
              this.madeMarkers[i].setMap(null);
          };

          this.madeMarkers = [];
						$(this.markers).each(function(){
							var myLatLng = {lat: Number(this.lat), lng: Number(this.lng)};
              var icon = {
                url: that.baseUrl+"/img/icon--marker.svg", // url
                scaledSize: new google.maps.Size(45, 45), // Taille
              };
              var contentTitle = '<div class="marker__style">'+this.name+'</div>';
              var contentInfos = '<div class="marker__content"><a class="marker__link" target="_blank" href="'+that.baseUrl+'/lieux/'+this.id+'"'
              +'title="Afficher le lieu '+this.name+'"></a><figure style="background-image:url('
              +"'"+that.baseUrl+'/'+this.main_picture+'"'+"'"+')" class="marker__banner" alt="Image du lieu '
              +this.name+'"></figure><h4 class="title--marker">'+this.name+'</h4><p class="marker__note">'+
              this.note+' '+'<img class="marker__star" src="'+that.baseUrl+'/img/icon--star.svg"/> / 5</p></div>';
              var infoTitle = new google.maps.InfoWindow({content: contentTitle, zIndex : 5});
              var infos = new google.maps.InfoWindow({content: contentInfos, zIndex : 10});
              informations.push(infos);
              titles.push(infoTitle);
			        var marker = new google.maps.Marker({
			          position: myLatLng,
			          map: map,
                icon: icon,
			          title: this.name,
                url: that.baseUrl+"/lieux/"+this.id,
                infoWindowTitle : infoTitle,
                infoWindowInfos : infos,
			        });

              that.madeMarkers.push(marker);

              bounds.extend(marker.position);
              marker.infoWindowTitle.open(map, marker);
              marker.addListener('click', function(){
                for (var i=0;i<informations.length;i++) {
                  informations[i].close();
                }

                for (var i=0;i<titles.length;i++) {
                  titles[i].open(map, that.madeMarkers[i]);
                }


                marker.infoWindowTitle.close(map, marker);
                marker.infoWindowInfos.open(map, marker);
              });

              google.maps.event.addListener(marker.infoWindowInfos, 'closeclick', function() {
                for (var i=0;i<titles.length;i++) {
                  titles[i].open(map, that.madeMarkers[i]);
                }
              });

						});

            map.fitBounds(bounds);
            if(that.madeMarkers.length <= 1){
              map.setZoom(13);
            }

            if(that.madeMarkers.length == 0){
              var center =  {lat: 50.6325574, lng: 5.5796662};
              map.setCenter(center);
            }
				},

				getMarkers : function(){
          var modal = $('[data-remodal-id=modal-search]').remodal();
          this.filters = false;
					var that = this;
          var datas = {};
          if(this.search != ""){
            datas.search = this.search;
          }

          if(this.category != ""){
            datas.category = this.category;
          }

          if(this.note != ""){
            datas.note = this.note;
          }

					var response = axios.get(that.baseUrl+"/api/search/",{params : datas})
          .then(function(response){
						that.markers = response.data;
						that.makeMarkers();
            modal.close();
            that.filters = true;
					});
      	},

        getCategories : function(){
          var that = this;
          var response = axios.get(that.baseUrl+"/api/categories/")
          .then(function(response){
						that.categories = response.data;
					});
        },

        hideFilters : function(){
          this.filters = false;
        },

        removeFilter : function(item){
          if(item == "category"){
            this.category = '';
          }

          if(item == "note"){
            this.note = '';
          }

          this.getMarkers();
        }
      },
  });
};
