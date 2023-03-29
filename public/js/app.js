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

// .bx-controls-direction{
//     /* position:absolute; */
//     /* top: 50%; */
//     display: flex;
//     justify-content: space-between;
// }
// .bx-controls-direction a{
//     text-decoration: none;
//     color: var(--fons1);
//     font-size: 60px;
// }
    });
    $('.controles .prev').click(function(e){
        e.preventDefault();
        slider.goToPrevSlide();
    });

    $('.controles .next').click(function(e){
        e.preventDefault();
        slider.goToNextSlide();
    });
});
