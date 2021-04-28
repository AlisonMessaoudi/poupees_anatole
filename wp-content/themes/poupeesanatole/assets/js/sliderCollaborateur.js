/* COLLABORATEUR SLIDER */
(function($){
    var owl = $('.collaborateurs .owl-carousel');
    owl.owlCarousel({
        stagePadding: 0,
        loop: true,
        margin: 0,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:1,
                stagePadding: 0,
                center: true,
                nav: false,
                dots: true,
            },
            700:{
                items:3,
                stagePadding: 0,
                center: true,
                nav: false,
                dots: true,
            },
            1025:{
                items:4,
                center: true,
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
