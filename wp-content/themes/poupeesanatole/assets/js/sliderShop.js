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
                autoplay: false,
                stagePadding: -7.5,
                nav: false,
            },
            700:{
                items:3,
                autoplay: false,
                stagePadding: -130,
                nav: false,
                dots: true,
            },
            1025:{
                items:4,
                autoplay: false,
                stagePadding: -220,
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