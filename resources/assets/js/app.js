var map;
var toInit = null;
if( $('#user__map').length ){
  toInit = "user__map";
}

if( $('#search__map').length ){
  toInit = "search__map";
}


function initMap(){

  map = new google.maps.Map(document.getElementById(toInit), {
    center: {lat: 50.6325574, lng: 5.5796662},
    zoom: 14
  });

  google.maps.InfoWindow.prototype.opened = false;
};

if( $('.modal-should-open').length ){
  var poppingModal = $('.modal-should-open').remodal();
  poppingModal.open();
}

function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
      $('.uploaded-picture__container').attr('style', "background-image:url('"+e.target.result+"')");
    }

    reader.readAsDataURL(input.files[0]);
  }
}

function extractFromAdress(components, type){
    for (var i=0; i<components.length; i++)
        for (var j=0; j<components[i].types.length; j++)
            if (components[i].types[j]==type) return components[i].long_name;
    return "";
}


$(".label__success").click(function(){
  $(".label__success").removeClass("success--selected");
  $(this).addClass("success--selected");
});
