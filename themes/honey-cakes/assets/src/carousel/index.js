
//*! Init Slider and Settings

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
                // *! Add responsiveness to slider.
                responsive: [
                    {
                      breakpoint: 1024,
                      settings: {
                        slidesToShow: 3,
                        slidesToScroll: 2,
                        infinite: true,
                        dots: false
                      }
                    },
                    {
                      breakpoint: 600,
                      settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                      }
                    },
                    {
                      breakpoint: 480,
                      settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                      }
                    }
                    
                  ]
            });
        }
    }

    new SlickCarousel();

} )( jQuery );



