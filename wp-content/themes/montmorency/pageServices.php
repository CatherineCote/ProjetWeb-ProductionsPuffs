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
<style>
	body,
	HTML {
	margin: 0;
	width: 100%;
	height: 100%;
	overflow-x: hidden;
	background-color: #333333;
	}

	.panneau1 {
	background-color: rgba(9, 118, 165,0.5);
	width: 200vw;
	height: 300px;
	transform: rotate(-5deg);
	position: absolute;
	left: -20px;
	top: -150px;
	}

	.panneau2 {
	background-color: rgba(9, 118, 165,0.5);
	width: 200vw;
	height: 300px;
	transform: rotate(5deg);
	position: absolute;
	left: -20px;
	bottom: -150px;
	}

	.pageServices {
	background-color:  #333333;
	width: 100%;
	height: 100%;
	font-family: Noto Sans KR;
	color: #d1cdcd;
	top: 150px;
	position: absolute;
	}

	.titreServices {
	position: absolute;
	left: 50%;
	transform: translateX(-50%);
	}

	.textServices {
	top: 200px;
	width: 100%;
	position: absolute;
	}

	.soustitreServices {
	text-align: center;
	}

	.messageServices {
	position: relative;
	text-align: center;
	width: 80%;
	left: 50%;
	transform: translateX(-50%);
	}

	.sectionServices {
	width: 80%;
	position: relative;
	left: 50%;
	transform: translate(-50%);
	display: flex;
	justify-content: center;
	flex-direction: row;
	flex-wrap: wrap;
	}

	.sectionServices p {
	flex-basis: 47%;
	background-color: #056791;
	border-radius: 15px;
	padding: 5px;
	margin: 5px 5px;
	border: 2px solid #d1cdcd;
	}

	.bold {
	font-weight: bold;
	}

	a {
	color: #d1cdcd;
	}

	@media screen and (max-width: 900px) {
	.titreServices {
		font-size: 25px;
	}

	.textServices h2 {
		font-size: 20px;
	}

	.textServices p {
		font-size: 14px;
	}
	}

	@media screen and (max-width: 600px) {
	.titreServices {
		font-size: 22px;
	}

	.textServices h2 {
		font-size: 18px;
	}

	.textServices p {
		font-size: 12px;
	}
	}

</style>


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