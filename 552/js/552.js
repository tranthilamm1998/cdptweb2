$(document).ready(function(){
    //Các phương thức jQuery nằm trong này
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 3,
        loopedSlides:2,
        spaceBetween: 0,
        parallax: true,
        autoplay: 5000,
        speed: 800,
        autoplayDisableOnInteraction: false,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });

    $('.click').click(function(){
        var url = $(this).attr('src');
        $('.image img').attr("src",url);
    });

});