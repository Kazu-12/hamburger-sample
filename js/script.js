$(function side_bar(){
    $('.c-button__menu').on('click',function () {
        if($(window).width() < 1201) {
            $(".l-contents__right").toggleClass('open');
            $("body").toggleClass('open');
        }
    });
    $(".c-button__menu-close").on('click',function () {
        $(".l-contents__right").removeClass('open');
        $("body").removeClass('open');
    });
});

$(window).resize(function(){
    $(".l-contents__right").removeClass('open');
    $("body").removeClass('open');
});