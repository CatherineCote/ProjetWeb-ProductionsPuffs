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
<style>
	body,
HTML {
  margin: 0;
  width: 100%;
  height: 100%;
  overflow-x: hidden;
  background-color: #333333;
}

.pageValeur {
  background-color:#333333;
  width: 100%;
  height: 100%;
  font-family: Noto Sans KR;
}

.panneau1 {
  background-color:rgba(9, 118, 165,0.5);
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

.titreValeur {
  position: absolute;
  left: 50%;
  transform: translateX(-50%);
  color: #d1cdcd;
}

.textValeur {
  position: absolute;
  width: 80%;
  max-width: 700px;
  height: 100%;
  z-index: 2;
  color: #d1cdcd;
  margin-top: 150px;
}

.sectionValeur {
  display: flex;
  width: 100%;
  justify-content: center;
}

.bold {
  font-weight: bold;
}

.textValeur h2 {
  text-align: center;
}

.textValeur p {
  margin-bottom: 50px;
}

@media screen and (max-width: 900px) {
  .titreValeur {
    font-size: 25px;
  }

  .textValeur h2 {
    font-size: 20px;
  }

  .textValeur p {
    font-size: 14px;
  }
}

@media screen and (max-width: 600px) {
  .titreValeur {
    font-size: 22px;
  }

  .textValeur h2 {
    font-size: 18px;
  }

  .textValeur p {
    font-size: 12px;
  }
}

</style>
	<article>
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