(function($) {
    $(document).ready(function (){
        $('.site__header .menu__burger').click(function(){
            var icon = $('.menu__burger .fa');
            if (icon.hasClass('fa-times')){
                icon.removeClass('fa-times').addClass('fa-bars');
            }
            else {
                icon.removeClass('fa-bars').addClass('fa-times');
            }
        })
        if ($('main.site__document i.fa.fa-chevron-left').length == 0) {
            $('.document__navigation').prepend('<a class="disabled" href="#"><i class="fa fa-chevron-left"></i></a>');
        }
        if ($('main.site__document i.fa.fa-chevron-right').length == 0) {
            $('.document__navigation').prepend('<a class="disabled" href="#"><i class="fa fa-chevron-right"></i></a>');
        }
    })
})(jQuery);