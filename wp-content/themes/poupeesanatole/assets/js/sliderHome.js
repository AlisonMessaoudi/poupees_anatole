/* HOME SLIDER */
(function($){
    var owl = $(".home__slider .owl-carousel");
    owl.owlCarousel({
        stagePadding: 0,
        loop: true,
        margin: 0,
        nav: false,
        dots: true,
        autoplay:true,
        autoplayTimeout:4000,
        autoplayHoverPause: false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1224:{
                items:1
            }
        }
    });
    owl.on('initialized.owl.carousel', function(event) {
        $('.owl-item .texteSlider').hide();
        $('.owl-item.active .texteSlider').fadeIn("slow");
    });
    owl.on('translated.owl.carousel', function(event) {
        $('.owl-item .texteSlider').hide();
        $('.owl-item.active .texteSlider').fadeIn("slow");
    });
})(jQuery);