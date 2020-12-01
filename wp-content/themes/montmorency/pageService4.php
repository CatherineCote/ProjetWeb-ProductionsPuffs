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

@media screen and (max-width: 900px) {
  
  .titreService{
    font-size:25px;
  }
  
  .textService h2{
    font-size:20px;
  }
  
  .textService p{
    font-size:14px;
  }
}

@media screen and (max-width: 600px) {
  
  .titreService{
    font-size:22px;
  }
  
  .textService h2{
    font-size:18px;
  }
  
  .textService p{
    font-size:px;
  }
}

</style>
	<article>
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