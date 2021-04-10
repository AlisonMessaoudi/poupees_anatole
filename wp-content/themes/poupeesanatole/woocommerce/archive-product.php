<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header();

?>

<main class="container site__shop">

    <div class="shop__titre">
        
        <h2>Le Shop</h2>
        
        <button>
            <a href="<?= home_url('/panier'); ?>"><ion-icon name="basket-outline"></ion-icon>&nbsp;Mon panier</a>
        </button>
    
    </div>
	
	<div class="filtre">
		<h2>Filtres</h2>

	</div>

	<?php
	if ( woocommerce_product_loop() ) {

		/**
		 * Hook: woocommerce_before_shop_loop.
		 *
		 * @hooked woocommerce_output_all_notices - 10
		 * @hooked woocommerce_result_count - 20
		 * @hooked woocommerce_catalog_ordering - 30
		 */
		// do_action( 'woocommerce_before_shop_loop');
		woocommerce_product_loop_start();

		if ( wc_get_loop_prop( 'total' ) ) {
			while ( have_posts() ) {
				the_post();
				/**
				 * Hook: woocommerce_shop_loop.
				 */
				do_action( 'woocommerce_shop_loop' );
				wc_get_template_part( 'content', 'product' );
			}
		}

		woocommerce_product_loop_end();

		/**
		 * Hook: woocommerce_after_shop_loop.
		 *
		 * @hooked woocommerce_pagination - 10
		 */
		do_action( 'woocommerce_after_shop_loop' );

	} else {
		/**
		 * Hook: woocommerce_no_products_found.
		 *
		 * @hooked wc_no_products_found - 10
		 */
		do_action( 'woocommerce_no_products_found' );
	}
	?>

</main>

<script type="text/javascript">
	jQuery(function($) { // Je t'explique
		var types = $('li.card__shop span.type'); // Dans chaque carte j'ai mis des span avec comme classe le type d'attribut
		var categories = []; // On veut les lister dans ce tableau
		for(var i = 0; i < types.length; i++) { // On parcourt les balises
			var type = $(types[i]).attr('class').substr(5); // On récupère la classe et on enlève la classe type
			var children = $(types[i]).children(); // Sous chaque span de type, on a un span avec comme classe la valeur de l'attribut
			var values = []; // On veut lister les valeurs de l'attribut courant dans ce tableau
			for(var j = 0; j < children.length; j++) { // On parcourt les balises
				var value = $(children[j]).attr('class'); // On récupère la valeur de l'attribut
				if(!values.includes(value)) { // Si la valeur n'est pas déjà dans la liste des valeurs
					values.push(value); // On l'ajoute dans la liste
				}
			}
			
			if(categories.length > 0) { // Si la liste n'est pas vide
				var found = false; // On essaie de chercher le type
				for(var k = 0; k < categories.length && !found; k++) { // On parcourt la liste
					found = categories[k][0] == type; // On regarde si le type est déjà dans la liste
					if (found) { // s'il l'est
						for (var l = 0; l < values.length; l++) { // On parcourt les valeurs du type
							var valueFound = false; // On regarde si la valeur est déjà dedans
							for (var m = 0; m < categories[k][1].length && !valueFound; m++) { // On parcourt les valeurs déjà présentes
								valueFound = values[l] == categories[k][1][m]; // Si elle y est on s'arrête
							}
							if(!valueFound) { // Si elle n'y est pas
								categories[k][1].push(values[l]); // On ajoute la valeur à la liste
							}
						}
					}
				}
				if(!found) { // Si après avoir parcouru le tableau on ne l'a pas trouvé
					categories.push([type, values]); // On ajoute tout
				}
			}
			else { // Si elle est vide
				categories.push([type, values]); // On ajoute tout
			}
		}

		for(var i = 0; i < categories.length; i++) { // dès qu'on a la liste complète consolidée
			var html = '<h4>' + $($('span.type.' + categories[i][0]).first().contents().get(0)).text() + '</h4>'; // On crée le titre
			html += '<div">'; // On ouvre la div
			for(var j = 0; j < categories[i][1].length; j++) { // On parcourt les valeurs et les transforme en checkbox
				html += '<input type="checkbox" class="' + categories[i][0] + '|' + categories[i][1][j] + '" name="' + categories[i][1][j] + '" />' + $('span.type.' + categories[i][0] + ' span.' + categories[i][1][j]).first().text() + '<br />';
			}
			html += '</div>'; // On ferme la div
			$('div.filtre').append(html); // On l'ajoute au corps de la page
		}

		var nbFiltre = 0;
		$('input[type="checkbox"').click(function() { 
			// on cible les input et on met un evenement onClick dessus
				var filtres = []; // crée une variable contenant un tableau vide
				$('div.filtre input:checked').each(function(){ // on parcours les input checké
					var classe = $(this).attr('class').split('|'); // on crée une variable classe contenant les valeurs (attribut et term)
					var type = classe[0]; // on crée une variable type qui contient les attributs
					var valeur = classe[1]; // on crée une variable valeur qui contient les terms
					var found = false;
					for(var i=0; i < filtres.length && !found; i++) {
						found = filtres[i][0] == type;
						if(found && !filtres[i][1].includes(valeur)) {
							filtres[i][1].push(valeur);
						}
					}
					if (!found){
						filtres.push([type, [valeur]]);
					}
				});

				if(filtres.length == 0 || filtres.length < nbFiltre){
					$('li.card__shop').show();
				}
				for (var i = 0; i < filtres.length; i++) {
					for(var j = 0; j < filtres[i][1].length; j++) {
						var li = $('li.card__shop:visible > span.type.' + filtres[i][0] + ' > span.' + filtres[i][1][j]).parent().parent();
						$('li.card__shop').hide();
						li.show();
					}
				}
				nbFiltre = filtres.length;
		});
	})
</script>

<?php get_footer() ?>
