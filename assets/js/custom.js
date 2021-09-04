$(document).ready(function() {
    "use strict";

    
$('.banner .slider-text').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    arrows: false,
    arrows: false,
    vertical: true,
    verticalSwiping: true
  });

$(window).on('scroll', function() {
  let getScrollTop = $(this).scrollTop();

  if(getScrollTop > 150) {
    $('.header').addClass('active');
  } else {
    $('.header').removeClass('active');
  }

})

$(".card-header").on('click', function(){
    // self clicking close
    if($(this).next(".card-body").hasClass("active")){
      $(this).next(".card-body").removeClass("active").slideUp()
     $(this).children("span").removeClass("flaticon-remove").addClass("flaticon-plus")	
    }
  else{
    $(".card .card-body").removeClass("active").slideUp()
    $(".card .card-header span").removeClass("flaticon-remove").addClass("flaticon-plus");
    $(this).next(".card-body").addClass("active").slideDown()
     $(this).children("span").removeClass("flaticon-plus").addClass("flaticon-remove")
   }
   })









});