<?php 
/*
  Template Name: Accueil
*/
?>

<main class="container site__panier">

    <div class="row panier__titre">
        
        <h2>Panier</h2>
    
    </div>

    <div class="liste__panier">
        
        <table>
            <tr>
                <td>Articles</td>
                <td>Nombre d'article</td>
                <td>Prix</td>
            </tr>
            <tr>
                <td><img src="" alt=""></td>
                <td>Famille Abricot</td>
                <td>x1</td>
                <td>200€</td>
            </tr>
            <tr>
                <td><img src="" alt=""></td>
                <td>Couple Pomme</td>
                <td>x1</td>
                <td>120€</td>
            </tr>
            <tr>
                <td>Total</td>
                <td>320€</td>
            </tr>

        </table>
    
    </div>

    <div class="panier__btn-paiement">
    
        <button>
            <a href="<?php echo home_url('#'); ?>">Passer au paiement&nbsp;&nbsp;<i class="fa fa-chevron-right"></i></a>
        </button>
    
    </div>



</main>