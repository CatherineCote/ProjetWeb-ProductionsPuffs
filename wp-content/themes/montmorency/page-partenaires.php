<?php
/**
 * Template Name: page-partenaires
 */

// Appel le fichier header.php
get_header(); 

// Est-ce que nous avons des pages à afficher ?
if ( have_posts() ) : 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>
<style>
	.titrePartenaire{
		width: 100%;
		height: 20vmin;
		color: white;
		display: flex;
		justify-content: center;
		align-items: center;
		letter-spacing: 2px;
		margin-top: 5%;
	}

	 

	.contenuPagePartenaire p{
		width: 100%;
		height: 5vmin;
		align-items: center;
		color: white;
		font-size: 20px;
		display: flex;
		justify-content: center;
		background-color: black;
		opacity: 0.5;
	}

	.image {
		display: flex;
		flex-wrap: wrap;
		justify-content: center;
		width: 100%;
	}

	.image img{
		width: 25vmin;
		height: 25vmin;
		border: solid 7px rgb(9, 118, 165);
		border-radius: 100%;
	}

	/*-------------- Mediaquery tablette 768px - 375px --------------*/
	@media screen and (max-width: 768px) and (min-width: 375px){
		.image img{
			width: 25vmin;
			height: 25vmin;
			border: solid 7px rgb(9, 118, 165);
			border-radius: 100%;
		}

		.contenuPagePartenaire p{
			width: 100%;
			height: 7vmin;
			align-items: center;
			color: white;
			font-size: 16px;
			display: flex;
			justify-content: center;
			background-color: black;
			opacity: 0.5;
		}
	
		.titrePartenaire h2{
			background-color: black;
			opacity: 0.5;
			width: 30%;
			height: 10vmin;
			font-size: 20px;
		}
	}
	/*-------------- Mediaquery Iphone 374px - 0px --------------*/
	@media screen and (max-width: 374px) and (min-width: 0px){
		.image img{
			width: 30vmin;
			height: 30vmin;
			border: solid 7px rgb(9, 118, 165);
			border-radius: 100%;
		}

		.contenuPagePartenaire p{
			width: 100%;
			height: 11vmin;
			align-items: center;
			color: white;
			font-size: 10px;
			display: flex;
			justify-content: center;
			background-color: black;
			opacity: 0.5;
		}
	
		.titrePartenaire h2{
			background-color: black;
			opacity: 0.5;
			width: 40%;
			height: 20vmin;
			font-size: 14px;
		}
	}
</style>


	<article>
		<div class=" titrePartenaire">
			<h2>
				<?php the_title(); 
				/* Titre de la page */ ?>
			</h2>
		</div>
		<div class="contenuPagePartenaire">
			<?php the_content(); 
			/* Affiche le contenu principal de la page */ ?>
		</div>
	</article>
<?php endwhile; // Fermeture de la boucle ?>

<?php else : // Si aucune page correspondante n'a été trouvée ?>
	<h2>Oh oh, la page recherchée est disparue</h2>
	<img src="https://i.giphy.com/media/3o8doR2qGIXQDGCVoY/giphy.webp" alt="Page disparue">
<?php endif; 

// Appel le fichier footer.php
get_footer(); ?>