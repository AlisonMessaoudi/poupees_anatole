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
                autoplay: false,
                stagePadding: -10,
                nav: false,
            },
            700:{
                items:2,
                autoplay: false,
                stagePadding: -20,
                nav: false,
                dots: true,
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