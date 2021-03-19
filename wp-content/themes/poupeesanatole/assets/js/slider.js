/* SHOP SLIDER */
(function($){
    var owl = $('.shop .owl-carousel');
    $(".shop .owl-carousel").owlCarousel({
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
