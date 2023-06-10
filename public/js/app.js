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

    // $(document).ready(function() {
    //     var $grid = $('.grid').masonry({
    //       itemSelector: '.grid-item',
    //       columnWidth: '.grid-sizer',
    //       percentPosition: true
    //     });

    //     $grid.on('click', 'img', function() {
    //       $(this).toggleClass('grid-item--gigante');
    //       $grid.masonry('layout');
    //     });
    //   });

    var quantityInput = $('#quantity');
    var incrementButton = $('#increment');
    var decrementButton = $('#decrement');

    function updateQuantity(change) {
        var value = parseInt(quantityInput.val()) + change;
        if (value < 1) {
            value = 1;
        }
        quantityInput.val(value);
    }

    incrementButton.click(function() {
        updateQuantity(1);
    });
    decrementButton.click(function() {
        updateQuantity(-1);
    });

    $('.product-form').submit(function() {
        $('button[type="submit"]', this).prop('disabled', true);
        $('<input>').attr({
            type: 'hidden',
            name: 'quantity',
            value: quantityInput.val()
        }).appendTo($(this));
    });

    $('#btnPay').on("click", function(e){
        e.preventDefault();
        let name = $('#name').val();
        let email = $('#email').val();
        let address = $('#address').val();
        let num = $('#num').val();
        let date = $('#date').val();
        let cv = $('#cv').val();
        if(name === '' || email === '' || address === '' || num === '' || date === '' || cv === ''){
            Swal.fire('Por favor completa todos los campos', '', 'error');
        }else{
            Swal.fire('Gràcies per la teva compra!', '', 'success');
        }
    })

    $('.fav').on('click', function(){
        let img = $(this);
        img.data('favd', !img.data('favd'));
        if(img.data('favd')) {
            img.attr('src',"/img/icons/fullheart.svg");
        } else {
            img.attr('src',"/img/icons/heart.svg");
        }
        $.ajax({
            type: "POST",
            url: `/favourites/${img.data('product_id')}`,
            data: {
                "_token": $("meta[name='csrf-token']").attr("content")
            },
            success: function(data){
                console.log('success!');
            }
        });
        /*
        if(img.attr('src')=="/img/icons/fullheart.svg"){
            img.attr('src',"/img/icons/heart.svg");
        }else{
            img.attr('src',"/img/icons/fullheart.svg");
        }
        */
        img.animate({
            opacity: 0.5,
            width: '+=20px',
            height: '+=20px'
        }, 100, function() {
            img.animate({
                opacity: 1,
                width: '-=20px',
                height: '-=20px'
            }, 100);
        });
    })
    $('.btnAñadirCarrito').on('click', function(){
        Swal.fire({
            icon: 'success',
            title: 'Producte afegit al carret',
            text: 'El producte ha estat afegit al carret de compra amb èxit.',
            showConfirmButton: false,
            timer: 3000
        });
    });
});
