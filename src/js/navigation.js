/*  script для меню навигации и иконки "бургер" */

$(document).ready(function() {

    /* script анимации иконки "бургер" при нажатии */

    $('.header-major__border-burger').on('click',  function(event) {
        $('.header-major__border-burger, .header-major__border-burger__icon, .header-major__border-burger__icon__span').toggleClass('active');
        $('#header-major, .header-major__nav').toggleClass('open-nav');
        $('body').toggleClass('lock');  

        if (window.matchMedia("(max-width: 991px)").matches) {

            $('.header-major__nav > a').click(function() {

                $('.header-major__border-burger, .header-major__border-burger__icon, .header-major__border-burger__icon__span').removeClass('active');
                $('#header-major, .header-major__nav').removeClass('open-nav');
                $('body').removeClass('lock');
            });
        }
    });

    /* script появления фона у меню nav при скролле (затемнение меню навигации) */

    if (window.matchMedia("(min-width: 992px)").matches) {

        $(window).scroll(function(){
            if ($(this).scrollTop() > 150) {

                $('.header-major__nav').addClass('background-fixed');
            } else {
            $('.header-major__nav').removeClass('background-fixed');
            }
        });
    }

});