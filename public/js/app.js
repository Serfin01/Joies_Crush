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

      // botonesCantidad
      var quantityInput = $('#quantity');
      var incrementButton = $('#increment');
      var decrementButton = $('#decrement');

      // Función para actualizar el valor de la cantidad
      function updateQuantity(change) {
          var value = parseInt(quantityInput.val()) + change;
          if (value < 1) {
              value = 1;
          }
          quantityInput.val(value);
      }

      // Eventos para los botones "Sumar" y "Restar"
      incrementButton.click(function() {
          updateQuantity(1);
      });
      decrementButton.click(function() {
          updateQuantity(-1);
      });

      // Envío del formulario al servidor
      $('.product-form').submit(function() {
          // Deshabilitar los botones para evitar múltiples envíos
          $('button[type="submit"]', this).prop('disabled', true);

          // Agregar la cantidad actual al formulario
          $('<input>').attr({
              type: 'hidden',
              name: 'quantity',
              value: quantityInput.val()
          }).appendTo($(this));
      });
});
