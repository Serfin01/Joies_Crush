// import './bootstrap';


$(document).ready(function(){
    // $(".slider").bxSlider();
    var slider = $('.bxslider').bxSlider({
      mode: 'fade',
      captions: true,
      slideWidth: 600,
      controls:false,
      pager: true,
      pagerCustom: '.bx-pager'
    });
});
