(function($) {
  $(window).scroll(function(){
      var scroll = $(window).scrollTop();
      if(scroll >= 500){
        $('.appear').addClass('animate__animated animate__fadeIn');
      }
      else {
        $('.appear').removeClass('animate__animated animate__fadeIn');
      } 
  });
})(jQuery);