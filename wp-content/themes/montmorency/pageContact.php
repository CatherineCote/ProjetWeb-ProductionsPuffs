<?php
/**
 * Template Name: Page Contact
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

		<div class="pageContact">
			<div class="panneau1"></div>
			<div class="panneau2"></div>
			<h1 class="titreContact"><?php the_title(); ?></h1>

			<div class="sectionContact">
				<div class="formContact">

				<div class="input prenom">
					<label for="">Prénom</label>
					<input type="text">
				</div>

				<div class="input nom">
					<label for="">Nom</label>
					<input type="text">
				</div>

				<div class="input email">
					<label for="">Courriel</label>
					<input type="email">
				</div>

				<div class="input raison">
					<label for="">Raison</label>
					<select>
					<option value="information">Information</option>
					<option value="probleme">Probleme</option>
					<option value="emploi">Emlpoi</option>
					<option value="autre">Autre</option>
					</select>
				</div>

				<div class="input sujet">
					<label for="">Sujet</label>
					<input type="text">
				</div>
				<div class="input message">
					<label for="">Message</label>
					<textarea></textarea>
				</div>
				<button class="btnContact">Envoyer</button>
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