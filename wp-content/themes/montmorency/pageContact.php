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
<style>
	body,
	HTML {
	margin: 0;
	width: 100%;
	height: 100%;
	overflow-x: hidden;
	background-color:#333333;
	}

	.pageContact {
	background-color:#333333;
	width: 100%;
	height: 100%;
	font-family: Noto Sans KR;
	top: 150px;
  	position: absolute;
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

	.titreContact {
	position: absolute;
	left: 50%;
	transform: translateX(-50%);
	color: #d1cdcd;
	}

	.sectionContact {
	display: flex;
	justify-content: center;
	align-items: center;
	width: 100%;
	height: 100%;
	z-index: 2;
	position: absolute;
	}

	.formContact {
	display: flex;
	flex-wrap: wrap;
	width: 400px;
	background-color: #056791;
	border-radius: 10px;
	padding: 25px;
	color: #d1cdcd;
	border: 5px solid #363636;
	}

	.input {
	display: flex;
	justify-content: space-between;
	width: 100%;
	margin-top: 20px;
	}

	.prenom {
	margin-top: 0;
	}

	.input input,
	.input select,
	.input textarea {
	width: 300px;
	background-color: #d1cdcd;
	border: none;
	}

	.btnContact {
	background-color: #d1cdcd;
	color: #056791;
	border: none;
	padding: 10px;
	position: relative;
	left: 50%;
	transform: translateX(-50%);
	margin-top: 25px;
	font-size: 20px;
	border-radius: 15px;
	}

	@media screen and (max-width: 900px) {
	.titreContact {
		font-size: 25px;
	}

	.input {
		font-size: 14px;
	}
	}

	@media screen and (max-width: 600px) {
	.titreContact {
		font-size: 22px;
	}

	.input {
		font-size: 12px;
		flex-direction: column;
		position: relative;
		margin-top: 10px;
		justify-content: center;
	}

	.btnContact {
		font-size: 15px;
	}

	.formContact {
		width: 300px;
	}
}

</style>

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
					<label for=""><?php the_field('prenom'); ?></label>
					<input type="text">
				</div>

				<div class="input nom">
					<label for=""><?php the_field('nom'); ?></label>
					<input type="text">
				</div>

				<div class="input email">
					<label for=""><?php the_field('courriel'); ?></label>
					<input type="email">
				</div>

				<div class="input raison">
					<label for=""><?php the_field('raison'); ?></label>
					<select>
					<option value="information"><?php the_field('information'); ?></option>
					<option value="probleme"><?php the_field('probleme'); ?></option>
					<option value="emploi"><?php the_field('emploi'); ?></option>
					<option value="autre"><?php the_field('autre'); ?></option>
					</select>
				</div>

				<div class="input sujet">
					<label for=""><?php the_field('sujet'); ?></label>
					<input type="text">
				</div>
				<div class="input message">
					<label for=""><?php the_field('message'); ?></label>
					<textarea></textarea>
				</div>
				<button class="btnContact"><?php the_field('envoyer'); ?></button>
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