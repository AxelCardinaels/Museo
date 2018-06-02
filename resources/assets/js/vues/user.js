if( $('.vue--user').length ){
  var createPlace = new Vue({
      el: '.vue--user',

      data:{
				userId : $(".user-id").text(),
				markers : null,
      },

			mounted : function(){
				this.getMarkers();
			},

      methods:{
        makeMarkers : function(){
          var bounds = new google.maps.LatLngBounds();
          var titles = [];
          var informations = [];
          var markers = [];
						$(this.markers).each(function(){
							var myLatLng = {lat: Number(this.lat), lng: Number(this.lng)};
              var icon = {
                url: "/img/icon--marker.svg", // url
                scaledSize: new google.maps.Size(45, 45), // Taille
              };
              var contentTitle = '<div class="marker__style">'+this.name+'</div>';
              var contentInfos = '<div class="marker__content"><a class="marker__link" target="_blank" href="/lieux/'+this.id+'"'
              +'title="Afficher le lieu '+this.name+'"></a><figure style="background-image:url('
              +"'"+'/'+this.main_picture+'"'+"'"+')" class="marker__banner" alt="Image du lieu '
              +this.name+'"></figure><h4 class="title--marker">'+this.name+'</h4><p class="marker__note">'+
              this.note+' '+'<img class="marker__star" src="/img/icon--star.svg"/> / 5</p></div>';
              var infoTitle = new google.maps.InfoWindow({content: contentTitle, zIndex : 5});
              var infos = new google.maps.InfoWindow({content: contentInfos, zIndex : 10});
              informations.push(infos);
              titles.push(infoTitle);
			        var marker = new google.maps.Marker({
			          position: myLatLng,
			          map: map,
                icon: icon,
			          title: this.name,
                url: "/lieux/"+this.id,
                infoWindowTitle : infoTitle,
                infoWindowInfos : infos,
			        });

              markers.push(marker);

              bounds.extend(marker.position);
              marker.infoWindowTitle.open(map, marker);
              marker.addListener('click', function(){
                for (var i=0;i<informations.length;i++) {
                  informations[i].close();
                }

                for (var i=0;i<titles.length;i++) {
                  titles[i].open(map, markers[i]);
                }


                marker.infoWindowTitle.close(map, marker);
                marker.infoWindowInfos.open(map, marker);
              });

              google.maps.event.addListener(marker.infoWindowInfos, 'closeclick', function() {
                for (var i=0;i<titles.length;i++) {
                  titles[i].open(map, markers[i]);
                }
              });

						});

            map.fitBounds(bounds);
            if(markers.length == 1){
              map.setZoom(12);
            }

            if(markers.length == 0){
              var center =  {lat: 50.6325574, lng: 5.5796662};
              map.setCenter(center);
            }

				},

				getMarkers : function(){
					var that = this;
					var response = axios.get("/api/user/show/"+this.userId)
          .then(function(response){
						that.markers = response.data[0].favoris;
						that.makeMarkers();
					});
      	},
		},
  });
};
