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
			width: 25%;
 			height: 15vmin;
 			background-color: black;
 			opacity: 0.5;
 			display: flex;
  			justify-content: center;
  			align-items: center;
 			transform: translateX(150%);
  			color: white;
 			letter-spacing: 15px;
 			font-family: helvetica;
 			font-size: 100%;
		}
		/* Contenu de la page */

		.contenuNouvellesRecentes{
			display: flex;
  			flex-wrap: wrap;
  			justify-content: flex-start;
  			width: 60%;
  			transform: translateX(35%);
		}

		.nouvelleRecente{
			width: 40%;
			height: 60vmin;
			display: flex;
			justify-content: flex-end;
			transform: translate(30%, 20%);

		}

		.nouvelleRecente p{
			padding: 2%;
  			text-align: center;
 			color: white;
 			letter-spacing: 2px;
  			font-family: helvetica;
 			font-size: 150%; 
			position: absolute;
			background-color: #0976A5;
			opacity: 0.75;
			top: 65%;
			
		}

		.informationBal2019{
			height: 100%;
			width: 100%;
			display: flex;
		}

		.titreBal2019{
			width: 100%;
			width: 50vmin;
			background-color: blue;
			position: absolute;
			top: 30%;
		}

		.section2019{
			width: 20%;
			height: 20%;
		}

		.section2018{
			width: 20%;
			height: 20%;
		}

		.section2017{
			width: 20%;
			height: 20%;
		}

		.section2016{
			width: 20%;
			height: 20%;
		}

		.section2015{
			width: 20%;
			height: 20%;
		}
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

		<div class="section2019">
			<p> 2019 </p>
			<img class="imageEvenement2019" src="http://85.lechainon.org/wp-content/uploads/2019/05/305A5840.jpg">
		</div>

		<div class="section2018">
			<p> 2018 </p>
			<img class="imageEvenement2018" src="http://85.lechainon.org/wp-content/uploads/2019/06/DSC_6839.jpg">
		</div>

		<div class="section2017">
			<p> 2017 </p>
			<img class="imageEvenement2017" src="http://85.lechainon.org/wp-content/uploads/2019/06/5_BalAnnChainon-4.jpg">
		</div>

		<div class="section2016">
			<p> 2016 </p>
			<img class="imageEvenement2016" src="http://85.lechainon.org/wp-content/uploads/2019/06/Fondation_Le_Chainon_Gala_2016_IMG_3199_Photo_Marc_Gibert_ADECOM_2.jpg">
		</div>

		<div class="section2015">
			<p> 2015 </p>
			<img class="imageEvenement2015" src="http://85.lechainon.org/wp-content/uploads/2019/06/DSC_5588.jpg">
		</div>
	</div>
<?php endwhile; // Fermeture de la boucle ?>

<?php else : // Si aucune page correspondante n'a été trouvée ?>
	<h2>Oh oh, la page recherchée est disparue</h2>
	<img src="https://i.giphy.com/media/3o8doR2qGIXQDGCVoY/giphy.webp" alt="Page disparue">
<?php endif; 

// Appel le fichier footer.php
get_footer(); ?>