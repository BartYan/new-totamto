$(document).ready(function () {
    $('.carousel').slickLightbox({
        src: 'src',
        itemSelector: '.slick__books img'
    });
    $('.carousel').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.carousel-nav'
    });
    $('.carousel-nav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.carousel',
        dots: false,
        centerMode: false,
        focusOnSelect: true,
        responsive: [{
            breakpoint: 1200,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                // centerMode: false, /* set centerMode to false to show complete slide instead of 3 */
            }
        }]
    });
});