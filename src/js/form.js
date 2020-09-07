/* script для form section id #feedback */

$(document).ready(function() {

    /* script для запрета отправки пустого сообщения
    и для вывода сообщений об успешной отправки сообщения */
    $('#feedback-input').click(function() {

        if($('#comment').val() != 0) {

            
            $('.feedback__wrapper-text').addClass('active'); 
        } else {

           

            setTimeout(function() { 
                $('.feedback__popup-error').addClass('active').removeClass('active');
                }, 1000);
        }
    });

});