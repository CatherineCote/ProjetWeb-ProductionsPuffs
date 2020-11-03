<?php
/**
 * Template Name: page-accueil
 */

// Appel le fichier header.php
get_header(); 

// Est-ce que nous avons des pages à afficher ?
if ( have_posts() ) : 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>
<style>
h2 {
  display: none;
}
.headerAccueil{
	display:flex;
	justify-content:center;
	align-items:center;
	flex-wrap:wrap;
}
.headerAccueil img{
	top:0;
	left:0;
	width:100%;
	height:100vmin;
	clip-path: polygon(0 0, 100% 0, 100% 70%, 0% 100%);
	object-fit: cover;
	object-position: 100% 50%;
	z-index:-1;
}
.slogan{
	color:white;
	position:absolute;
	text-align: center;
	width:30%;
	letter-spacing: 8px;
	font-size:20px;
	line-height: 3;
	transform:translateX(50%);
}
.contenu{
	position:relative;
	display:flex;
	justify-content:flex-end;
}
.wrapperButton{
	position:absolute;
	width:40%;
	right:0;
	transform:translateX(-25%);
}
.don{
	border:none;
	background-color:rgba(9, 118, 165,0.5);
	color:white;
	letter-spacing: 5px;
	font-size:15px;
	height:15vmin;
	margin-right:5%;
}
.testament{
	border:none;
	background-color:rgba(9, 118, 165,0.5);
	color:white;
	letter-spacing: 5px;
	font-size:15px;
	height:15vmin;
}
.raison{
	color:white;
	width:40%;
	letter-spacing: 3px;
	font-size:14px;
	background-color:rgba(9, 118, 165,0.5);
	padding:5px;
	margin-right:19%;
	margin-top:10%;
	display:flex;
	justify-content:center;
	flex-wrap:wrap;
	text-align:center;
	transform:translateX(10%);
}

.blockBleu{
	width:100%;
	height:100vmin;
	clip-path: polygon(0 0, 100% 41%, 100% 100%, 0% 100%);
	background-color:rgba(9, 118, 165,0.5);
	
}
.joindre{
	display:flex;
	justify-content:center;
	align-items:center;
	width:40%;
	height:50vmin;
	color:white;
	background: rgba(0, 0, 0, 0.5);
	position:absolute;
	right:15%;
	transform:translateY(110%);
	z-index:1;
	
}
.joindre:before{
	display:none;
 content: '';
 background: white;
 width:110%; 
 position: absolute;
 left: 0;
 right: 0;
 top: 0; 
 bottom: 0;
 filter: blur(4px);
 z-index: 6;
  opacity: 0.5;
}
.joindre p{
	letter-spacing: 2px;
	font-size:11px;
	line-height: 2;
	padding:10%;
}
#joindre{
	letter-spacing: 2px;
	font-size:10px;
	line-height: 2;
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
	<div class="bodyAccueil">
	<div class="headerAccueil">
	<img src="https://images.unsplash.com/photo-1535659513767-f1a7b068ebc1?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=751&q=80"/>
		<div class="slogan"><p>La principale ressource d'hébergement pour femmes en difficulté au Québec.</p></div>
	</div>
	<div class="contenu">
	<div class="wrapperButton">
	<button type="button" class="don"> Faire un don</button>
	<button type="button" class="testament"> Don par testament</button>
	</div>
	<div class="raison">
		<h4>Pourquoi faire un don</h4>
		<p>Les dons nous permettent d'aider les femmes en détresses.</p>
	</div>
	<div class="blur">
		<div class="joindre">
		<p>JOINDRE
		LE CHAÎNON<br><br>

		<span id="joindre">4373, ave. de l'Esplanade
		Montréal (Québec) H2W 1T2
		514 845-0151</span></p>
		<p>JOINDRE
		LE MAGASIN<br><br><br>

		<span id="joindre">4375, boul. St-Laurent
		Montréal (Québec) H2W 1Z8
		514 843-4354
		514 845-0151</span></p>
	</div></div>
	
		
		
		</div>
		<div class=blockBleu>
		</div>
	
	</div>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js" integrity="sha512-IQLehpLoVS4fNzl7IfH8Iowfm5+RiMGtHykgZJl9AWMgqx0AmJ6cRWcB+GaGVtIsnC4voMfm8f2vwtY+6oPjpQ==" crossorigin="anonymous"></script>
<script>
	/*JAVA............................................................*/
	gsap.from('.bodyAccueil',{
  opacity:0,
  y:100,
  delay:0.5
})
</script>

<?php endwhile; // Fermeture de la boucle ?>

<?php else : // Si aucune page correspondante n'a été trouvée ?>
	<h2>Oh oh, la page recherchée est disparue</h2>
	<img src="https://i.giphy.com/media/3o8doR2qGIXQDGCVoY/giphy.webp" alt="Page disparue">
<?php endif; 

// Appel le fichier footer.php
get_footer(); ?>