$(function side_bar(){
    $('.c-button__menu').on('click',function () {
        $(".l-contents__right").toggleClass('open');
    });
    
    $(".c-button__menu-close").on('click',function () {
        $(".l-contents__right").removeClass('open');
    });
});

$(window).resize(function(){
    $(".l-contents__right").removeClass('open');
});