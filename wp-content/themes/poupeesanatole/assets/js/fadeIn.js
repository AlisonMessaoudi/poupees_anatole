// Ajoute les classes pour les animations
jQuery (function($) {
  function addAnimation() {
  $(document.getElementsByClassName('appear')).addClass('animate__animated animate__fadeInRight');
}
 
// Check si l'element passé en param est affiché sur l'écran
function checkVisible(elm) {
  var rect = elm.getBoundingClientRect();
  var viewHeight = Math.max(document.documentElement.clientHeight, window.innerHeight);
  return !(rect.bottom < 0 || rect.top - viewHeight >= 0);
}
 
//Regarde si la div competence est affichée toutes les 250ms puis désactive l'interval
var truc = document.getElementsByClassName('appear');
  for(var i=0; i < truc.length; i++) {
var interval = setInterval(function() {
    if ( checkVisible(truc[i]))     {
      addAnimation();
      clearInterval(interval); // Désactive le SetInterval
    }
  }, 250);
}


})
