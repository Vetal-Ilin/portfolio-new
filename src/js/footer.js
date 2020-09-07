/* script для иконок footer  */

$(document).ready(function() {

    $('.footer-contact').on('click keypress', function() {


        if (window.matchMedia("(max-width: 991px)").matches) {

            $(this).toggleClass('active');
            $('.footer-vk').removeClass('active');
            $('.footer-github').removeClass('active');
        } else {

            $(this).toggleClass('active');
        };
    });
    
    $('.footer-vk').on('click keypress', function() {

        if (window.matchMedia("(max-width: 991px)").matches) {
            
            $(this).toggleClass('active');
            $('.footer-contact').removeClass('active');
            $('.footer-github').removeClass('active');
        } else {

            $(this).toggleClass('active');
        };
    }); 

    $('.footer-github').on('click keypress', function() {

        if (window.matchMedia("(max-width: 991px)").matches) {
            
            $(this).toggleClass('active');
            $('.footer-contact').removeClass('active');
            $('.footer-vk').removeClass('active');
        } else {

            $(this).toggleClass('active');
        };
    });

});