jQuery (function($) {
// AJOUT D'UNE CLASS 'MASQUER' aux produits
$('products li').addClass('masquer');
// J'AJOUTE LA PROPRIETE CSS À LA CLASS MASQUER
$('masquer').css('display', 'none');
// FUNCTION AFFICHER LES 6 PRODUITS : 
    function afficherProduit() { 
        // JE CRÉE UNE VARIABLE CONTENANT TOUS MES PRODUITS MASQUÉS
        var produit = $('products li.masquer');
        // JE CRÉE UNE BOUCLE POUR AFFICHER LES 6 PREMIERS PRODUITS
        for(var i=0; i< produit.length && i < 6; i++) { 
            // JE RETIRE LA CLASS MASQUER DES 6 PREMIERS PRODUITS
            $(produit[i]).removeClass('masquer');
        }
        // SI IL Y A ENCORE DES PRODUITS MASQUÉS
        if ($('products li.masquer').length > 0) {
        // J'AFFICHE LE BOUTON
            $('btn_more').css('display','block');
        }
        // SINON
        else {
        // JE MASQUE LE BOUTON 
            $('btn_more').css('display','none');
        }
    }
    $(document).ready(function(){afficherProduit(
        $('btn_more').click(afficherProduit())
    )});
   
})
