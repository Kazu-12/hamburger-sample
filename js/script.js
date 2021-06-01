jQuery(function side_bar(){
    jQuery('.c-button__menu').on('click',function () {
        if(jQuery(window).width() < 1201) {
            jQuery(".l-contents__right").toggleClass('open');
            jQuery("body").toggleClass('open');
        }
    });
    jQuery(".c-button__menu-close").on('click',function () {
        jQuery(".l-contents__right").removeClass('open');
        jQuery("body").removeClass('open');
    });
});

jQuery(window).resize(function(){
    jQuery(".l-contents__right").removeClass('open');
    jQuery("body").removeClass('open');
});