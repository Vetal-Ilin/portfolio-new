/* script для плавного скролла при нажатии на ссылки */

$(document).ready(function() {

    $('a[href^="#"]').on('click keypress', function () {

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
});