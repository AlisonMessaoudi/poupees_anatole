// $(document).ready(function(){

//     var $sousMenuProjet = $('.sub-menu');
//     var $menuProjet = $('#menu-item-41');

//     $sousMenuProjet.css('display','none');
    
//     $($menuProjet).click(function(){
//         $sousMenuProjet.css('display','block');
//     })

// })

function cache_affiche(ok1, okPlusMoins){
    if(document.getElementById(ok1).style.display == 'none')
    {
            document.getElementById(ok1).style.display='block';
            document.getElementById(okPlusMoins).value = 'En savoir -';
    }
    else
    {
            document.getElementById(ok1).style.display='none';
            document.getElementById(okPlusMoins).value = 'En savoir +';
    }
};