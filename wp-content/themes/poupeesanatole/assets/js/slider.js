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

/* SHOP SLIDER */
(function($){
    $('.shop .parent_owl-carousel ul').addClass('owl-carousel');
    var owl = $('.shop ul.owl-carousel');
    owl.append($('#all-products'));
    owl.owlCarousel({
        stagePadding: 10,
        loop: false,
        margin: 0,
        nav: true,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:1,
                center: true,
                autoplay: false,
                stagePadding: -10
            },
            700:{
                items:3,
                autoplay: false,
                stagePadding: -120
            },
            1025:{
                items:4,
                autoplay: false,
                stagePadding: -190
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

/* SHOP SLIDER : PAGE PRODUIT */
(function($){
    $('.products .parent_owl-carousel ul').addClass('owl-carousel');
    var owl = $('.products ul.owl-carousel');
    owl.owlCarousel({
        stagePadding: 10,
        loop: false,
        margin: 0,
        nav: true,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:1,
                center: true,
                autoplay: false,
                stagePadding: -10,
                nav: false,
            },
            700:{
                items:3,
                autoplay: false,
                stagePadding: 0
            },
            1025:{
                items:4,
                autoplay: false,
                stagePadding: -150
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
            0:{
                items:1,
                autoplay: false,
                stagePadding: 14
            },
            700:{
                items:3,
                autoplay: false,
                stagePadding: 0
            },
            1025:{
                items:4,
                autoplay: false,
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
            0:{
                items:1,
                center: true,
                autoplay: false,
                stagePadding: -10
            },
            700:{
                items:3,
                autoplay: false,
                stagePadding: 0
            },
            1025:{
                items:4,
                autoplay: false
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