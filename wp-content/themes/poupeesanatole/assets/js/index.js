$(document).ready(function(){

    var $sousMenuProjet = $('.sub-menu');
    var $menuProjet = $('#menu-item-41');

    $sousMenuProjet.css('display','none');
    
    $($menuProjet).click(function(){
        $sousMenuProjet.css('display','block');
    })

})