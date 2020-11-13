<?php
/**
 * Template Name: page nouvelles
 */

// Appel le fichier header.php
get_header(); 

// Est-ce que nous avons des pages à afficher ?
if ( have_posts() ) : 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>

	<style>
		.bodyNouvelles{
			height: 100%;
			width: 100%;
		}

		/* Entete de la page Nouvelles */
		.enteteNouvelles{
			width: 50%;
			height: 20vmin;
			background-color: black;
			color: white;
			display: flex;
			justify-content: center;
			align-items: center;
			transform: translateX(50%);
			font-size: 100%;
			font-family: helvetica;
			letter-spacing: 2px;
			opacity: 0.5;
		}

		/* Contenu des nouvelles récentes */
		.contenuNouvellesRecentes{
			width: 100%;
			display: flex;
			justify-content: flex-start;
			flex-wrap: wrap;
		}

		.nouvelleRecente{
			width: 50%;
			display: flex;
			flex-wrap: wrap;
			justify-content: flex-start;
		}

		.photo{
			width:80%;
			display: flex;
		}

		.InformationBal2019{
			width: 100%;
			display: flex;
			justify-content: flex-start;
			flex-wrap: wrap;
		}

		.titreBal2019{
			width: 50%;
			display: flex;
			justify-content: flex-start;
			font-size: 200%;
			letter-spacing: 2px;
			transform: translateX(20%);
		}

		.texteBal2019{
			width: 40%;
			display: flex;
			justify-content: flex-start;
			text-align: center;
			font-size: 150%;
			letter-spacing: 1px;
			transform: translateX(-125%) translateY(55%);
			line-height: 1.3;
		}

		.ensembleSections{
			width: 100%;
			display: flex;
			justify-content: flex-end;
			flex-wrap: wrap;
		}

		.sections{
			width: 50%;
			display: flex;
			justify-content: flex-start;
			flex-wrap:wrap;
		}

		.imageEvenement2019{
			width:50%;
			object-fit: none;
		}



		 /*.imageEvenement2019{
			width: 60%;
			justify-content: flex-start;
			transform: translateY(-170%);
			
			
		}

		.t2019{
			display: flex;
			justify-content: center;
			transform: translateY(-800%) translateX(100%);
			background-color: #0976a5;
			font-size: 300%;
			height: 5vmin;
			width: 10vmin;
			opacity: 0.75;
			z-index: 1;
		} */


		
	</style>

	<article>
		<div class=" titre">
			<h2>
				<?php the_title(); 
				/* Titre de la page */ ?>
			</h2>
		</div>
		<div class="contenuPage">
			<?php the_content(); 
			/* Affiche le contenu principal de la page */ ?>
		</div>
	</article>

	<div class="bodyNouvelles">
	<div class="enteteNouvelles">
		<h1> Les nouvelles </h1>
	</div>

	<div class="contenuNouvellesRecentes">
		
		<div class="nouvelleRecente">
			<p> 10e Tournoi de Golf S'Élancer pour Elles </p>
			<img class="photo" src="http://85.lechainon.org/wp-content/uploads/2019/06/4J8A0028.jpg">
		</div>

		<div class="InformationBal2019">
			<h3 class="titreBal2019"> Prestigieux Bal 2019 du Chainon </h3>
			<h4 class="texteBal2019"> Campagne annuelle de souscription
La campagne annuelle de souscription bat son plein. Les donateurs et supporters du Chaînon sont appelés à faire un don destiné à financer les services d’aide et d’hébergement offerts aux femmes en difficulté. Les dons ponctuels et mensuels sont acceptés avec reconnaissance.

Vous aussi pouvez participer à cet élan de générosité. </h4>
		</div>
		</div>

		<div class="ensembleSections">

			<div class="sections">
				<h3 class="t2019"> 2019 </h3>
				<img class="imageEvenement2019" src="http://85.lechainon.org/wp-content/uploads/2019/05/305A5840.jpg">
			
				<p class="t2018"> 2018 </p>
				<img class="imageEvenement2018" src="http://85.lechainon.org/wp-content/uploads/2019/06/DSC_6839.jpg">
			
				<p class="t2017"> 2017 </p>
				<img class="imageEvenement2017" src="http://85.lechainon.org/wp-content/uploads/2019/06/5_BalAnnChainon-4.jpg">
			
				<p class="t2016"> 2016 </p>
				<img class="imageEvenement2016" src="http://85.lechainon.org/wp-content/uploads/2019/06/Fondation_Le_Chainon_Gala_2016_IMG_3199_Photo_Marc_Gibert_ADECOM_2.jpg">
			
				<p class="t2015"> 2015 </p>
				<img class="imageEvenement2015" src="http://85.lechainon.org/wp-content/uploads/2019/06/DSC_5588.jpg">
			</div>
		</div>
	</div>
<?php endwhile; // Fermeture de la boucle ?>

<?php else : // Si aucune page correspondante n'a été trouvée ?>
	<h2>Oh oh, la page recherchée est disparue</h2>
	<img src="https://i.giphy.com/media/3o8doR2qGIXQDGCVoY/giphy.webp" alt="Page disparue">
<?php endif; 

// Appel le fichier footer.php
get_footer(); ?>