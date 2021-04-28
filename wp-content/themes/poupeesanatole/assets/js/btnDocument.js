(function($) {
    $(document).ready(function (){
        if ($('main.site__document i.fa.fa-chevron-left').length == 0) {
            $('.document__navigation').prepend('<a class="disabled" href="#"><i class="fa fa-chevron-left"></i></a>');
        }
        if ($('main.site__document i.fa.fa-chevron-right').length == 0) {
            $('.document__navigation').append('<a class="disabled" href="#"><i class="fa fa-chevron-right"></i></a>');
        }
    })
})(jQuery);