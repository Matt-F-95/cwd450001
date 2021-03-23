
( ($) => {
    class SlickCarousel {
        constructor() {
            this.initiateCarousel();
        }

        initiateCarousel() {
            $('.posts-carousel').slick({
                autoplay: true,
                autoplaySpeed: 5000,
                slidesToShow: 2,
                slidesToScroll: 1,
            });
        }
    }

    new SlickCarousel();

} )( jQuery );

// function initSlider(){
//     jQuery.noConflict('.posts-carousel').slick({
//         dots: false,
//         infinite: true,
//         speed: 300,
//         slidesToShow: 1,
//         autoplay: true,
//         prevArrow: '<div class="slick-prev"><i class="fa fa-chevron-left"></i></div>',
//         nextArrow: '<div class="slick-next"><i class="fa fa-chevron-right"></i></div>'
//     });
// }

// jQuery.noConflict(document).on('ready', function () {
//     initSlider();
// });
