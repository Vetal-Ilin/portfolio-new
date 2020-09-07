/* script для section id #work */

$(document).ready(function() {

    /* script для открытия и закрытия всплывающих окон */
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

    /* script для закрытия всплывающих окон при нажатии кнопки esc */
    $(document).keydown(function(eventObject){
        
        if( eventObject.which == 27 ){
        $('.work__list__item-left__popup-left, .work__list__item-right__popup-right').removeClass('active');
        };

    });

});