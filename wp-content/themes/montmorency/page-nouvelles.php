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

	.titre{
		display: none;
	}

	.bodyNouvelles{
		height: 100%;
		width: 100%;
	}


		/*-------------- Entete de la page Nouvelles --------------*/
	.enteteNouvelles{
		width: 50%;
		height: 10vmin;
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
		margin-top: 5%;
	}


		/*-------------- Contenu des nouvelles récentes --------------*/
	.contenuNouvellesRecentes{
		width: 100%;
		height: 100px;
		display: flex;
		justify-content: flex-start;
		flex-wrap: wrap;
		
	}
	.nouvelleRecente{
		width: 40%;
		display: flex;
		flex-wrap: wrap;
		justify-content: flex-start;
		transform: translateX(5%);
	}
	.nouvelleRecente img{
		width:100%;
		display: flex;
	}

	.nouvelleRecente p{
		width: 100%;
		color: white;
		font-size: 36px;
		background-color:rgba(9, 118, 165,0.5);
		display: flex;		
	}


		/*-------------- Texte Bal 2019 --------------*/
	.InformationBal2019{
		width: 100%;
		display: flex;
		justify-content: flex-start;
		flex-wrap: wrap;
	}

	.titreBal2019{
		width: 40%;
		display: flex;
		justify-content: flex-start;
		font-size: 28px;
		font-weight: italic;
		letter-spacing: 2px;
		transform: translateX(18%) translateY(-100%);
	}

	.texteBal2019{
		width: 40%;
		display: flex;
		justify-content: flex-start;
		text-align: center;
		font-size: 24px;
		letter-spacing: 1px;
		transform: translateX(-94%) translateY(-60%);
		line-height: 1.3;
	}

		/*-------------- Sections --------------*/
	.contenuSectionsNouvelles{
		width:100%;
		margin-top:-25%;
		display:flex;
		flex-wrap:wrap;
		justify-content:flex-end;
		text-align:center;
		transform: translateX(-2%);
	}

	.wrapperAnnonce{
		width:100%;
		display:flex;
		flex-wrap:wrap;
		justify-content:center;
		text-align:center;
		background-color:black;
		opacity:0.5;
		margin-top:10%;
		transform:translateX(20%);
	}

	.wrapperNouvelle{
		width:50%;
	}

	.section2019{
		margin-top:5%;
		height:10vmin;
		background-color:rgba(9, 118, 165,0.5);
	}

	.section2019:hover{
		background-color:black;
		opacity:0.5;
		transition-duration: 1s;
		
	}

	.section2018{
		margin-top:5%;
		height:10vmin;
		background-color:rgba(9, 118, 165,0.5);
	}

	.section2018:hover{
		background-color:black;
		opacity:0.5;
		transition-duration: 1s;
	}

	.section2017{
		margin-top:5%;
		height:10vmin;
		background-color:rgba(9, 118, 165,0.5);
	}

	.section2017:hover{
		background-color:black;
		opacity:0.5;
		transition-duration: 1s;
	}

	.section2016{
		margin-top:5%;
		height:10vmin;
		background-color:rgba(9, 118, 165,0.5);
	}

	.section2016:hover{
		background-color:black;
		opacity:0.5;
		transition-duration: 1s;
	}

	.section2015{
		margin-top:5%;
		height:10vmin;
		background-color:rgba(9, 118, 165,0.5);
	}

	.section2015:hover{
		background-color:black;
		opacity:0.5;
		transition-duration: 1s;
	}

	.wrapperNouvelle img{
		width: 100%;
		height: 100px;
	}

	.section2019 img{
		object-fit: cover;
		object-position: 30% 30%;
	}
	.section2018 img{
		object-fit: cover;
		object-position: 75% 15%;
	}

	.section2017 img{
		object-fit: cover;
		object-position: 20% 15%;
	}

	.section2016 img{
		object-fit: cover;
		object-position: 20% 20%;
	}

	.section2015 img{
		object-fit: cover;
		object-position: 90% 90%;
	}

	.blockBleu{
		width:100%;
		height:400px;
		clip-path: polygon(0 0, 100% 41%, 100% 100%, 0% 100%);
		background-color:rgba(9, 118, 165,0.5);
		position: absolute;
		transform: translateY(-120%);
		z-index: -1;
}

	.swiper-container {
      width: 100%;
      height: 40vmin;
    }

    .swiper-slide {
      text-align: center;
      background: #fff;

      /* Center slide text vertically */
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center;
    }



		/*-------------- Mediaquery tablette 768px - 375px --------------*/
	@media screen and (max-width: 768px) and (min-width: 375px){
	.contenuSectionsNouvelles{
		width: 100%;
		height: 100%;
	}

	.enteteNouvelles{
		width: 50%;
		height: 10vmin;
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
		margin-top: 5%;
	}

	.nouvelleRecente p{
		width: 100%;
		color: white;
		font-size: 26px;
		background-color:rgba(9, 118, 165,0.5);
		display: flex;		
	}

	.titreBal2019{
		width: 40%;
		display: flex;
		justify-content: flex-start;
		font-size: 18px;
		font-weight: italic;
		letter-spacing: 2px;
		transform: translateX(18%) translateY(-140%);
	}

	.texteBal2019{
		width: 40%;
		display: flex;
		justify-content: flex-start;
		text-align: center;
		font-size: 14px;
		letter-spacing: 1px;
		transform: translateX(-94%) translateY(-100%);
		line-height: 1.3;
	}

	.wrapperNouvelle img{
		width: 100%;
		height: 60px;
	}

	.blockBleu{
		width:100%;
		height:200px;
		clip-path: polygon(0 0, 100% 41%, 100% 100%, 0% 100%);
		background-color:rgba(9, 118, 165,0.5);
		position: absolute;
		transform: translateY(-170%);
		z-index: -1;
	}

	.swiper-container {
      	width: 100%;
      	height: 30vmin;
    }

    .swiper-slide {
      text-align: center;
      background: #333333;

      /* Center slide text vertically */
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center;
    }
}
	/*-------------- Mediaquery Iphone 374px - 0px --------------*/
	@media screen and (max-width: 374px) and (min-width: 0px){
		
	.enteteNouvelles{
		width: 60%;
		height: 15vmin;
		font-size: 60%;
		transform: translateX(35%);
	}

	.contenuNouvellesRecentes{
		justify-content: center;
		width: 100%;
	}

	.nouvelleRecente{
		width: 100%;	
		justify-content: center;
		transform: translateX(0%);
	}

	.nouvelleRecente p{
		font-size: 15px;		
	}

	.InformationBal2019{
		justify-content: center;	
	}

	.titreBal2019{
		margin-top: 20%;
		width: 100%;
		display: flex;
		justify-content: flex-start;
		font-size: 16px;
		font-weight: italic;
		letter-spacing: 2px;
		transform: translateX(0%) translateY(0%);
	}

	.texteBal2019{
		width: 100%;
		display: flex;
		justify-content: flex-start;
		text-align: center;
		font-size: 12px;
		letter-spacing: 1px;
		transform: translateX(0%) translateY(0%);
		line-height: 1.3;
	}

	.contenuSectionsNouvelles{
		margin-top:-25%;
		justify-content:center;
		transform: translateX(0%);
	}

	.wrapperAnnonce{
		justify-content:center;
		margin-top:10%;
		transform:translateX(0%);
	}

	.wrapperNouvelle{
		width:100%;
		height:10%;
	}

	.section2019{
		margin-top:40%;
		height:10vmin;
		background-color:rgba(9, 118, 165,0.5);
	}

	.section2019:hover{
		background-color:black;
		opacity:0.5;
		transition-duration: 1s;	
	}

	.section2018{
		margin-top:15%;
		height:10vmin;
		background-color:rgba(9, 118, 165,0.5);
	}

	.section2018:hover{
		background-color:black;
		opacity:0.5;
		transition-duration: 1s;
	}

	.section2017{
		margin-top:15%;
		height:10vmin;
		background-color:rgba(9, 118, 165,0.5);
	}

	.section2017:hover{
		background-color:black;
		opacity:0.5;
		transition-duration: 1s;
	}

	.section2016{
		margin-top:15%;
		height:10vmin;
		background-color:rgba(9, 118, 165,0.5);
	}

	.section2016:hover{
		background-color:black;
		opacity:0.5;
		transition-duration: 1s;
	}

	.section2015{
		margin-top:15%;
		height:10vmin;
		background-color:rgba(9, 118, 165,0.5);
	}

	.section2015:hover{
		background-color:black;
		opacity:0.5;
		transition-duration: 1s;
	}

	.wrapperNouvelle img{
		width: 100%;
		height: 100px;
	}

	.wrapperNouvelle img{
		width: 100%;
		height: 50px;
	}

	.blockBleu{
		width:100%;
		height:100px;
		clip-path: polygon(0 0, 100% 41%, 100% 100%, 0% 100%);
		background-color:rgba(9, 118, 165,0.5);
		position: absolute;
		transform: translateY(-100%);
		z-index: -1;
	}
}

		
	</style>

	<article>
		<div class=" titre">
			<h2>
				<?php the_title(); 
				/*-------------- Titre de la page --------------*/ ?>
			</h2>
		</div>
		<div class="contenuPage">
			<?php the_content(); 
			/*-------------- Affiche le contenu principal de la page --------------*/ ?>
		</div>
	</article>

	<div class="bodyNouvelles">
	<div class="enteteNouvelles">
		<h1> Les nouvelles </h1>
	</div>
		
	 <div class="nouvelleRecente">
		<p> Récent : 10e Tournoi de Golf S'Élancer pour Elles </p>
				<!-- Swiper -->
				<div class="swiper-container">
			<div class="swiper-wrapper">
			<div class="swiper-slide"><img src='https://www.lechainon.org/medias/news/thumbs/Bal-2019-du-Chainon-5.jpg'></div>
			<div class="swiper-slide"><img src='https://www.lechainon.org/medias/news/thumbs/Tirage-billets-de-saison-Canadiens-de-Montreal-2.jpg'></div>
			<div class="swiper-slide"><img src='https://www.lechainon.org/medias/news/thumbs/Competition-Sportive.jpg'></div>
			</div>
		</div>
	</div> 

	<div class="contenuSectionsNouvelles">
		<div class="wrapperNouvelle">
			<div class="section2019"> 2019 <img src="http://85.lechainon.org/wp-content/uploads/2019/05/305A5840.jpg"> </div>
			<div class="section2018"> 2018 <img src="http://85.lechainon.org/wp-content/uploads/2019/06/DSC_6839.jpg"></div>
			<div class="section2017"> 2017 <img src="http://85.lechainon.org/wp-content/uploads/2019/06/5_BalAnnChainon-4.jpg"> </div>
			<div class="section2016"> 2016 <img src="http://85.lechainon.org/wp-content/uploads/2019/06/Fondation_Le_Chainon_Gala_2016_IMG_3199_Photo_Marc_Gibert_ADECOM_2.jpg"></div>
			<div class="section2015"> 2015 <img src="http://85.lechainon.org/wp-content/uploads/2019/06/DSC_5588.jpg"></div>
		</div>	
	</div>
		
	<div class="InformationBal2019">
		<h3 class="titreBal2019"> Prestigieux Bal 2019 du Chainon </h3>
		<h4 class="texteBal2019"> La campagne annuelle de souscription bat son plein. Les donateurs et supporters du Chaînon sont appelés à faire un don destiné à financer les services d’aide et d’hébergement offerts aux femmes en difficulté. Les dons ponctuels et mensuels sont acceptés avec reconnaissance.

Vous aussi pouvez participer à cet élan de générosité. </h4>
	</div>

	</div>
		<div class=blockBleu>
		</div>
</div>

<!-- Initialize Swiper -->
<script>
  var mySwiper = new Swiper('.swiper-container', {
  // Optional parameters
  loop: true,
  slidesPerView: 1,
      spaceBetween: 30,
  autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
  

  // If we need pagination
  pagination: {
	el: '.swiper-pagination',
	clickable: true,
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar',
  },
})
</script>

<?php endwhile; // Fermeture de la boucle ?>

<?php else : // Si aucune page correspondante n'a été trouvée ?>
	<h2>Oh oh, la page recherchée est disparue</h2>
	<img src="https://i.giphy.com/media/3o8doR2qGIXQDGCVoY/giphy.webp" alt="Page disparue">
<?php endif; 

// Appel le fichier footer.php
get_footer(); ?>