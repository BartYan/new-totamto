$(document).ready(function () {
    $('.carousel').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 4000,
        arrows: true,
        responsive: [{
            breakpoint: 1200,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                // slidesToShow: 1,
                // centerMode: false, /* set centerMode to false to show complete slide instead of 3 */
                // slidesToScroll: 1
            }
        }]
    });
    $('.slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 4000,
        arrows: false,
        dots: true,
        // responsive: [{
        //     breakpoint: 1200,
        //     settings: {
        //         slidesToShow: 1,
        //         slidesToScroll: 1,
        //     }
        // }]
    });
});
