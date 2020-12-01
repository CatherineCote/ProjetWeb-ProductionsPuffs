<?php
/**
 * Template Name: Page Valeur
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

		<?php the_content(); 
		/* Affiche le contenu principal de la page */ ?>

		<div class="pageValeur">
			<div class="panneau1"></div>
			<div class="panneau2"></div>
			<h1 class="titreValeur"><?php the_title(); ?></h1>

			<div class="sectionValeur">
				<div class="textValeur">
				<h2><?php the_field('sous_titre'); ?></h2>
				<p><?php the_field('message'); ?></p>
				<p><span class="bold"><?php the_field('titreValeur_1'); ?></span></br><?php the_field('valeur_1'); ?> </p>
				<p><span class="bold"><?php the_field('titreValeur_2'); ?></span></br><?php the_field('valeur_2'); ?> </p>
				<p><span class="bold"><?php the_field('titreValeur_3'); ?></span></br><?php the_field('valeur_3'); ?> </p>
				<p><span class="bold"><?php the_field('titreValeur_4'); ?></span></br><?php the_field('valeur_4'); ?> </p>
				<p><span class="bold"><?php the_field('titreValeur_5'); ?></span></br><?php the_field('valeur_5'); ?> </p>
				</div>
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