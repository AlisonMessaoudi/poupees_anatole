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
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:1,
                center: true,
                autoplay: false,
                nav: false,
                stagePadding: -10,
                dots: true,
            },
            700:{
                items:3,
                autoplay: false,
                stagePadding: -120,
                nav: false,
                dots: true,
            },
            1025:{
                items:4,
                autoplay: false,
                stagePadding: -190,
                dots: false,
                nav: true,
            }
        }
    })

    owl.on('changed.owl.carousel', function(e){
        if(e.item.index == 0){
            $('.site__home .shop .slider__wrapper .owl-prev span').css('color','#cecece');
            $('.site__home .shop .slider__wrapper .owl-next span').css('color','black');
        }
        else if(e.page.count-1 == e.page.index) {
            $('.site__home .shop .slider__wrapper .owl-next span').css('color','#cecece');
            $('.site__home .shop .slider__wrapper .owl-prev span').css('color','black');
        }
        else {
            $('.site__home .shop .slider__wrapper .owl-next span').css('color','black');
            $('.site__home .shop .slider__wrapper .owl-prev span').css('color','black');
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
    owl.append($('#all-products'));
    owl.owlCarousel({
        stagePadding: 10,
        loop: false,
        margin: 0,
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
                stagePadding: -120
            },
            1025:{
                items:4,
                autoplay: false,
                stagePadding: -150,
                dots: false,
                nav: true,
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
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:1,
                autoplay: false,
                stagePadding: 14,
                nav: false,
                dots: true,
            },
            700:{
                items:3,
                autoplay: false,
                stagePadding: 0,
                nav: false,
                dots: true,
            },
            1025:{
                items:4,
                autoplay: false,
                dots: false,
                nav: true,
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
                dots: true,
            },
            700:{
                items:3,
                autoplay: false,
                stagePadding: 0,
                nav: false,
                dots: true,
            },
            1025:{
                items:4,
                autoplay: false,
                dots: false,
                nav: true,
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