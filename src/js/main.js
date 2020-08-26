$(document).ready(function() {
    

    /*скрипт для меню бургер и навигации*/

        /*скрипт анимации иконки бургер при нажатии*/
                
        
        $('.header-major__border-burger').on('click',  function(event) {
            $('.header-major__border-burger, .header-major__border-burger__icon, .header-major__border-burger__icon__span').toggleClass('active');
            $('#header-major, .header-major__nav').toggleClass('open-nav');
            $('body').toggleClass('lock');  

            if (window.matchMedia("(max-width: 768px)").matches) {

                $('.header-major__nav > a').click(function() {

                    $('.header-major__border-burger, .header-major__border-burger__icon, .header-major__border-burger__icon__span').removeClass('active');
                    $('#header-major, .header-major__nav').removeClass('open-nav');
                    $('body').removeClass('lock');
                });
            }
        });
        
     

        /*скрипт появления фона у меню nav при скролле (затемнение навигации)*/
        if (window.matchMedia("(min-width: 992px)").matches) {

            $(window).scroll(function(){
                if ($(this).scrollTop() > 150) {

                    $('.header-major__nav').addClass('background-fixed');
                } else {
                $('.header-major__nav').removeClass('background-fixed');
                }
            });
        }
    /* end скрипт для меню бургер и навигации*/


    /* скрипт для скрола */

    $('a[href^="#"]').click(function () {

        if (window.matchMedia("(max-width: 991px)").matches) {

            var target = $(this).attr('href');
            $('html, body').animate({
            scrollTop: $(target).offset().top + 50
            }, 500);
            return false;

        } else {

            var target = $(this).attr('href');
            $('html, body').animate({
            scrollTop: $(target).offset().top - 50
            }, 500);
            return false;
        }
    });
    /* end скрипт для скрола */


    /* скрипт для слайдов в section #skills*/
    var swiper = new Swiper('.swiper-container', {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
          delay: 3000,
          disableOnInteraction: false,
        },
        pagination: {
          el: '.swiper-pagination',
          clickable: false,
        },
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
    }); 
    /* end скрипт для слайдов в section #skills*/


    /* Скрипт для открытия и закрытия окна popup (section id="#work") */
    $('#work__list__item__button-left').on('click',function(event) {

        $('.work__list__item-left__popup-left').addClass('active');
        $('#work__list__item-left__popup-left__wrapper-button-left').click(function() {
            $('.work__list__item-left__popup-left').removeClass('active');
        });
    });

    $('#work__list__item__button-right').click(function(event) {

        $('.work__list__item-right__popup-right').addClass('active');

        $('#work__list__item-right__popup-right__wrapper-button-right').click(function() {
            $('.work__list__item-right__popup-right').removeClass('active');
        });
    }); 
    /* end Скрипт для открытия и закрытия окна popup (section id="#work") */

    /* Скрипт для focus*/
    
        /* удаление выделения элемента focus при клике на него мышью*/
        $('.header-major__nav__link, .arrow-down-section-header,  .work__list__item__button-left, .work__list__item__button-right, #work__list__item-left__popup-left__wrapper-button-left, #work__list__item-right__popup-right__wrapper-button-right').mouseup(function() { this.blur() });
        /* end Скрипт для focus*/

    /* Скрипт для отправки формы */


        $('input[name="submit"]').click(function() {

            if($('#comment').val() != 0) {

                
                $('.feedback__wrapper-text').addClass('active'); 
            } else {

                $('.feedback__popup-error').addClass('active');

                setTimeout(function() { 
                    $('.feedback__popup-error').addClass('active').removeClass('active');
                    }, 1000);
            }
        });




    /* Скрипт для footer*/
            
    $('.footer-contact').click(function() {

        if (window.matchMedia("(max-width: 991px)").matches) {

            $(this).toggleClass('active');
            $('.footer-vk').removeClass('active');
            $('.footer-github').removeClass('active');
        } else {

            $(this).toggleClass('active');
        };
    });
    
    $('.footer-vk').click(function() {

        if (window.matchMedia("(max-width: 991px)").matches) {
            
            $(this).toggleClass('active');
            $('.footer-contact').removeClass('active');
            $('.footer-github').removeClass('active');
        } else {

            $(this).toggleClass('active');
        };
    }); 

    $('.footer-github').click(function() {

        if (window.matchMedia("(max-width: 991px)").matches) {
            
            $(this).toggleClass('active');
            $('.footer-contact').removeClass('active');
            $('.footer-vk').removeClass('active');
        } else {

            $(this).toggleClass('active');
        };
    }); 
    /* end Скрипт для footer */
});