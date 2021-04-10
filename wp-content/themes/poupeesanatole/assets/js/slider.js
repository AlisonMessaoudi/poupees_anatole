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
    $('.shop .parent_owl-carousel ul').addClass('owl-carousel');
    var owl = $('.shop ul.owl-carousel');
    owl.append($('#all-products'));
    owl.owlCarousel({
        stagePadding: 10,
        loop: true,
        margin: 0,
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
        margin: 0,
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

/* DOCUMENT SLIDER */
(function($){
    var owl = $('.documents .owl-carousel');
    $(".documents .owl-carousel").owlCarousel({
        stagePadding: 0,
        loop: true,
        margin: 0,
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