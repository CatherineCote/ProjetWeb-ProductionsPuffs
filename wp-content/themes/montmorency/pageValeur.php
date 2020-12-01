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
				<h2>Cinq valeurs guident nos priorités et nos actions</h2>
				<p>Au Chaînon nous accueillons une personne, non un problème. Notre culture s’exprime dans notre façon d’agir, d’intervenir et de travailler ensemble. La personne concernée par nos services se trouve au cœur des décisions, au centre des pratiques adoptées partout dans l’organisation. </p>
				<p><span class="bold"><?php the_field('titreValeur_1'); ?>Respect</span></br><?php the_field('valeur_1'); ?> Faire preuve de considération pour les besoins, les droits, les choix, la valeur et la démarche des personnes et des groupes.</p>
				<p><span class="bold"><?php the_field('titreValeur_2'); ?>Accueil inconditionnel de la personne</span></br><?php the_field('valeur_2'); ?> Démontrer une attitude d’ouverture et d’intérêt réel pour la personne malgré les comportements affichés et les difficultés vécues.</p>
				<p><span class="bold"><?php the_field('titreValeur_3'); ?>Justice sociale</span></br><?php the_field('valeur_3'); ?> Exiger des conditions de vie équitables pour chaque membre de la société.</p>
				<p><span class="bold"><?php the_field('titreValeur_4'); ?>Reconnaissance et valorisation du potentiel des femmes</span></br><?php the_field('valeur_4'); ?> Affirmer et accorder une place significative au droit des femmes d’agir sur les conditions sociales, économiques et politiques qu’elles subissent.</p>
				<p><span class="bold"><?php the_field('titreValeur_5'); ?>Solidarité</span></br><?php the_field('valeur_5'); ?> Développer des liens de réciprocité et d’entraide en fonction d’un but commun.</p>
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