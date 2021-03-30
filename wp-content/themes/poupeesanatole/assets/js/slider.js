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
            480:{
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

/* SHOP SLIDER */
(function($){
    var owl = $('.shop .owl-carousel');
    $(".shop .owl-carousel").owlCarousel({
        stagePadding: 10,
        loop: false,
        margin: 20,
        nav: true,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        responsive:{
            480:{
                items:3
            },
            600:{
                items:3
            },
            1224:{
                items:6
            }
        }
    })
    owl.on('mousewheel', '.owl-stage', function (e) {
        if (e.deltaY>0) {
            owl.trigger('next.owl');
        } else {
            owl.trigger('prev.owl');
        }
        e.preventDefault();
    });
})(jQuery);

/* COLLABORATEURS SLIDER */
(function($){
    var owl = $('.collaborateurs .owl-carousel');
    $(".collaborateurs .owl-carousel").owlCarousel({
        stagePadding: 0,
        loop: true,
        margin: 20,
        nav: true,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        responsive:{
            480:{
                items:3
            },
            600:{
                items:3
            },
            1224:{
                items:7
            }
        }
    })
    owl.on('mousewheel', '.owl-stage', function (e) {
        if (e.deltaY>0) {
            owl.trigger('next.owl');
        } else {
            owl.trigger('prev.owl');
        }
        e.preventDefault();
    });
})(jQuery);
