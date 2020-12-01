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
				<h2 class="soustitreServices">Nous sommes là pour vous</h2>
				<p class="messageServices">Vous êtes une femme âgée de 18 ans et plus et vivez des problèmes ? Nos intervenantes sont formées pour vous écouter et vous aider en toute discrétion.</br>
				Vous avez besoin d'aide? Appelez-nous en tout temps au 514 845-0151 ou parcourez cette section pour connaître nos services.
				</p>
				<div class="sectionServices">
				<p><a href="" class="bold"><?php the_field('titreServices_1'); ?>Écoute et référence</a></br><?php the_field('services_1'); ?></p>
				<p><a href="" class="bold"><?php the_field('titreServices_2'); ?>Hébergement </a></br><?php the_field('services_2'); ?>Selon vos besoins, nous pouvons vous venir en aide avec différentes formules d’hébergement.</p>
				<p><a href="" class="bold"><?php the_field('titreServices_3'); ?>Post-hébergement </a></br><?php the_field('services_3'); ?>La Relance favorise chez les participantes le retour à l’autonomie socio-économique et personnelle et contribue à une amélioration générale de leurs conditions de vie.</p>
				<p><a href="" class="bold"><?php the_field('titreServices_4'); ?>Soutien complémentaire </a></br><?php the_field('services_4'); ?>Les résidantes du Chaînon bénéficient d’une multitude de petites attentions qui visent à créer un sentiment de confiance en soi et en l’avenir.</p>
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