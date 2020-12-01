<?php
/**
 * Template Name: Page Service2
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

.pageService {
  background-color: #333333;
  width: 100%;
  height: 100%;
  font-family: Noto Sans KR;
  color: #d1cdcd;
  position: absolute;
  top:150px;
}

.titreService {
  position: absolute;
  left: 50%;
  transform: translateX(-50%);
}

.textService {
  position: absolute;
  top: 200px;
  width: 60%;
  left: 50%;
  transform: translate(-50%);
  text-align: center;
}

.bold {
  font-weight: bold;
}

@media screen and (max-width: 900px) {
  .titreService {
    font-size: 25px;
  }

  .textService h2 {
    font-size: 20px;
  }

  .textService p {
    font-size: 14px;
  }
}

@media screen and (max-width: 600px) {
  .titreService {
    font-size: 22px;
  }

  .textService h2 {
    font-size: 18px;
  }

  .textService p {
    font-size: 12px;
  }
}

</style>
	<article>
		<?php the_content(); 
		/* Affiche le contenu principal de la page */ ?>

		<div class="pageService">
			<div class="panneau1"></div>
			<div class="panneau2"></div>
			<h1 class="titreService"><?php the_title(); ?></h1>
			<div class="textService">
				<h2><?php the_field('sous_titre'); ?></h2>
				<p><span class="bold"><?php the_field('titreMessage1'); ?></span></br>
				<?php the_field('message1'); ?></br></br>
				<span class="bold"><?php the_field('titreMessage2'); ?></span></br>
				<?php the_field('message2'); ?></br></br>
				<span class="bold"><?php the_field('titreMessage3'); ?></span></br>
				<?php the_field('message3'); ?></br></br>
				<span class="bold"><?php the_field('titreMessage4'); ?></span> </br>
				<?php the_field('message4'); ?></br></br>
				<span class="bold"><?php the_field('titreMessage5'); ?></span></br>
				<?php the_field('message5'); ?>

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