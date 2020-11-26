<?php
/**
 * Modèle permettant d'afficher un article (Post).
 */

// Appel le fichier header.php
get_header(); 

// Avons-nous des articles à afficher ?
if ( have_posts() ) : 
	// Si oui, bouclons au travers les articles (logiquement, il n'y en aura qu'un)
	while ( have_posts() ) : the_post(); 
?>

	<article>
		<div class="titreArticle">
		<h2>
			<?php the_title(); 
			/* Titre de l'article */ ?>
		</h2>
</div>
		
<div class="contenu">
			<div class="colonneDroite">
				<?php the_content(); 
				/* Affiche le contenu principal de l'article */ ?>
			</div>
			
			<div class="colonneGauche">
			<p>Date de début: <br/><?php the_field('date_debut')?></p>
			<p>Date de fin:<br/> <?php the_field('date_fin')?></p>
			<p>Lieu : <?php the_field('lieu')?></p>
			<p><a href="https://www.jedonneenligne.org/fondationlechainon/bal20/">---Paiement en ligne---</a></p>
			<p>Contactez-nous</p>
			<h3>--Commandite--</h3>
			<p><?php the_field('commandite')?></p>
			</div>
		</div>
		
		

		<?php get_template_part( 'partials/metas' ); 
		// Appel le fichier metas.php dans le dossier partials ?>
	</article>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js" integrity="sha512-IQLehpLoVS4fNzl7IfH8Iowfm5+RiMGtHykgZJl9AWMgqx0AmJ6cRWcB+GaGVtIsnC4voMfm8f2vwtY+6oPjpQ==" crossorigin="anonymous"></script>
	<script>
		gsap.from('.contenu',{
  opacity:0,
  y:100,
  delay:0.5
})
		</script>
<?php endwhile; // Fermeture de la boucle ?>
		


<?php else : // Si aucun article correspondant n'a été trouvé ?>
	<h2>Oh oh, aucun article n'a été trouvé</h2>
	<img src="https://media.giphy.com/media/ZYX2ZNBPHmlmfc7Fcj/giphy.gif" alt="Aucun billet trouvé">
<?php endif; 

// Appel le fichier footer.php
get_footer(); ?>
