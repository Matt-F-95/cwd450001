
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


