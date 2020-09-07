/* script для form section id #feedback */

$(document).ready(function() {

    /* script для запрета отправки пустого сообщения
    и для вывода сообщений об успешной отправки сообщения */
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

});