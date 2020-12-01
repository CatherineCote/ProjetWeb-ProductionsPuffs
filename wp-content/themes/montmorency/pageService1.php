<?php
/**
 * Template Name: Page Service1
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

		<div class="pageService">
			<div class="panneau1"></div>
			<div class="panneau2"></div>
			<h1 class="titreService"><?php the_title(); ?></h1>
			<div class="textService">
				<h2>Un soutien accessible en tout temps</h2>
				<p>Le Chaînon écoute inconditionnellement et sans jugement toute demande d’aide, jour et nuit, 7 jours par semaine.
				Une intervenante est disponible pour aider les femmes à faire part de leurs difficultés. Si nos services d’hébergement conviennent et, en fonction des disponibilités, les femmes sont accueillies au Chaînon. Sinon, une orientation vers une ressource externe adéquate leur est alors proposée.
				Vous êtes dans le besoin, appelez-nous au 514 845-0151.
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