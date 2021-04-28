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
    })
})(jQuery);