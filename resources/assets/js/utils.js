$('.menu__img').click(function(){
  $('.user__menu').toggleClass("hide");
});

$('.user__map--enlarge').click(function(event) {
  event.preventDefault();
  $('.user__map').toggleClass('user__map--big');
  $(this).find("span").toggleClass("hide");
});


$(".reactive-upload").change(function() {

  if($('.uploaded-picture__container').hasClass("bg--faked")){
    $(".input__add").addClass("hide");
  };
  readURL(this);
});


$('.map__enlarge').click(function(event) {
  event.preventDefault();
  $('.search__map').toggleClass('search__map--big');
  $(this).find("span").toggleClass("hide");

});


autosize($('.input--answer'));

$(".success--label").click(function(){
  $(".success--label").removeClass("success--selected");
  $(this).addClass("success--selected");
});

if( $('[type="date"]').prop('type') != 'date' ) {
  flatpickr.localize(flatpickr.l10ns.fr);
  flatpickr('[type="date"]');
};
