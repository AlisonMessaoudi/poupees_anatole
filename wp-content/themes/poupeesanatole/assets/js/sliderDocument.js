/* DOCUMENT SLIDER */
(function($){
    var owl = $('.documents .owl-carousel');
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
                center: true,
                autoplay: false,
                stagePadding: 0,
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