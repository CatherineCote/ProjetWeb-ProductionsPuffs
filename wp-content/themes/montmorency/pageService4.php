<?php
/**
 * Template Name: Page Service4
 * Modèle permettant d'afficher une page.
 */

// Appel le fichier header.php
get_header(); 

// Est-ce que nous avons des pages à afficher ?
if ( have_posts() ) : 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>

	<article>
		<h2>
			
		</h2>

		<div class="pageService">
			<div class="panneau1"></div>
			<div class="panneau2"></div>
			<h1 class="titreService"><?php the_title(); ?></h1>
			<div class="textService">
				<h2><?php the_field('sous_titre'); ?></h2>
				<p><?php the_content(); ?>
				</p>
			</div>
		</div>

	</article>
<?php endwhile; // Fermeture de la boucle ?>

<?php else : // Si aucune page correspondante n'a été trouvée ?>
	<h2>Oh oh, la page recherchée est disparue</h2>
	<img src="https://i.giphy.com/media/3o8doR2qGIXQDGCVoY/giphy.webp" alt="Page disparue">
<?php endif; 

// Appel le fichier footer.php
get_footer(); ?>