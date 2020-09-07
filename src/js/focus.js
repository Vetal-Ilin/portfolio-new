/* script для события focus */

$(document).ready(function() {
    
    /* удаление выделения элемента focus при клике на него мышью*/
    $('.header-major__nav__link, .section-header__arrow-down').mouseup(function() { this.blur() });

});