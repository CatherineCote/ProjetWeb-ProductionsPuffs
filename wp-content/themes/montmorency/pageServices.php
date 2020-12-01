<?php
/**
 * Template Name: Page Services
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

		<div class="pageServices">
			<div class="panneau1"></div>
			<div class="panneau2"></div>
			<h1 class="titreServices"><?php the_title(); ?></h1>

			<div class="textServices">
				<h2 class="soustitreServices"><?php the_field('sous_titre'); ?></h2>
				<p class="messageServices"><?php the_field('message'); ?>
				</p>
				<div class="sectionServices">
				<p><a href="" class="bold"><?php the_field('titreServices_1'); ?></a></br><?php the_field('services_1'); ?></p>
				<p><a href="" class="bold"><?php the_field('titreServices_2'); ?> </a></br><?php the_field('services_2'); ?></p>
				<p><a href="" class="bold"><?php the_field('titreServices_3'); ?></a></br><?php the_field('services_3'); ?></p>
				<p><a href="" class="bold"><?php the_field('titreServices_4'); ?></a></br><?php the_field('services_4'); ?></p>
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