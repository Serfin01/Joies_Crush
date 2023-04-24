// import './bootstrap';


$(document).ready(function(){
    // $(".slider").bxSlider();
    var slider = $('.bxslider').bxSlider({
        mode: 'fade',
        captions: true,
        controls: false,
        autoHideControl: false,
        // nextSelector: '#NEXT',
        // prevSelector: '#PREV',
        // nextText: '>',
        // prevText: '<',
        pager: true,
        pagerCustom: '.bx-pager',
        minSlides: 1,
        maxSlides: 5,
        moveSlides: 5
    });
    $('.controles .prev').click(function(e){
        e.preventDefault();
        slider.goToPrevSlide();
    });

    $('.controles .next').click(function(e){
        e.preventDefault();
        slider.goToNextSlide();
    });

    $(document).ready(function() {
        var $grid = $('.grid').masonry({
          itemSelector: '.grid-item',
          columnWidth: '.grid-sizer',
          percentPosition: true
        });

        $grid.on('click', 'img', function() {
          $(this).toggleClass('grid-item--gigante');
          $grid.masonry('layout');
        });
      });

});
