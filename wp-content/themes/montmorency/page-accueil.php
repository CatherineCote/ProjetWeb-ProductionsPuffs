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
	font-size:100%;
	line-height: 3;
	transform:translateX(50%);
}
hr{
	width:60%;
}
.contenuAccueil{
	position:relative;
	display:flex;
	justify-content:flex-end;
}
.wrapperButton{
	position:absolute;
	width:40%;
	right:0;
	transform:translateX(-25%);
	z-index:9;
}

.don{
	border:none;
	background-color:rgba(9, 118, 165,0.5);
	color:white;
	letter-spacing: 5px;
	font-size:15px;
	height:15vmin;
	margin-right:5%;
	transition-duration: 1s;
}
.don:hover{
	background-color:black;
	opacity:0.5;
}
.don a:visited{
	color:white;
	text-decoration: none;
}
.don a:link{
	color:white;
	text-decoration: none;
}

.testament{
	border:none;
	background-color:rgba(9, 118, 165,0.5);
	color:white;
	letter-spacing: 5px;
	font-size:15px;
	height:15vmin;
	transition-duration: 1s;
}
.testament:hover{
	background-color:black;
	opacity:0.5;
}
.testament a:visited{
	color:white;
	text-decoration: none;
}
.testament a:link{
	color:white;
	text-decoration: none;
}
.raison{
	color:white;
	width:40%;
	height:20vmin;
	letter-spacing: 3px;
	font-size:90%;
	background-color:rgba(9, 118, 165,0.5);
	margin-right:19%;
	margin-top:10%;
	display:flex;
	justify-content:center;
	flex-wrap:wrap;
	text-align:center;
	transform:translateX(10%);
	
}
.wrapperRaison{
	display:flex;
	width:100%;
	justify-content:flex-end;
}
.temoin{
	text-align:center;
	color:white;
	width:40%;
	height:20vmin;
	font-size:100%;
	line-height: 3;
	background-color:rgba(0, 0, 0,0.5);
	transform:translateY(-25%);
	transition: all 500ms cubic-bezier(0.77, 0, 0.175, 1);
}
#nom{
	font-size:75%;
}
.carrousel{
	text-align:center;
	color:white;
	width:50%;
	height:30vmin;
	font-size:75%;
	line-height: 5;
	background-color:rgba(0, 0, 0,0.5);
	margin-left:18%;
}
.swiper-container{
	display:flex;
	justify-content:center;
	align-items:center;
	width:100%;
	height:100%;
}
.swiper-slide{
	font-size:15px;
	line-height:2;
	text-align:center;
}
.extrait{
	font-size:12px;
	line-height:1.6;
	text-align:center;
}
.swiper-slide a{
	background-color:rgba(9, 118, 165,0.5);
	padding:5%;
	color:white;
	font-size:12px;
	
}
.wiper-slide a:active{
	color:white;
}
.wrapperCarrousel{
position:absolute;
display:flex;
justify-content: space-evenly;
align-items:flex-end;
width:80%;
height:80vmin;
right:15%;
z-index:4;
}
.wrapperService{
	display:flex;
	width:40%;
	height:100%;
	align-self:flex-end;
	flex-wrap:wrap;
	transform:translateY(100%) translateX(50%);
	position:relative;
	
}
.hebergement{
	display:flex;
	align-items:center;
	justify-content:center;
	width:100%;
	height:15vmin;
	margin-top:15%;
	background-color:rgba(0, 0, 0,0.5);
	color:white;
	position:relative;
	transition: all 500ms cubic-bezier(0.77, 0, 0.175, 1);
}
.ecoute{
	display:flex;
	align-items:center;
	justify-content:center;
	width:100%;
	height:15vmin;
	background-color:rgba(0, 0, 0,0.5);
	color:white;
	position:relative;
	transition: all 500ms cubic-bezier(0.77, 0, 0.175, 1);
}
.from-bottom:before, 
.from-bottom:after {
	left: 0;
	height: 0;
	width: 100%;
}

.from-bottom:before {
	top: 0;	
	border: 1px solid white;
	border-top: 0;
	border-bottom: 0;
}

.from-bottom:after {
	bottom: 0;
	height: 0;
}

.from-bottom:hover:before,
.from-bottom:hover:after {
	height: 100%;
}

.blockBleu{
	width:100%;
	height:2000px;
	clip-path: polygon(0 0, 100% 41%, 100% 100%, 0% 100%);
	background-color:rgba(9, 118, 165,0.5);
	
}
.joindre{
	position:absolute;
	display:flex;
	width:100%;
}
.sectionFlex{
 display:flex;
	justify-content:center;
	align-items:center;
	flex-wrap:nowrap;
	width:40%;
	height:50vmin;
	color:white;
	background: rgba(0, 0, 0, 0.5);
	position:absolute;
	right:15%;
	transform:translateY(100%);
	margin-top:20%;
	z-index:1;
}

.joindre:after{
	display:none;
 content: '';
 background: white;
 width:100vmin; 
 position: absolute;
 left: 0;
 right: 0;
 top: 0; 
 bottom: 0;
 filter: blur(4px);
 z-index:-1;
  opacity: 0.5;
}
.joindre p{
	letter-spacing: 2px;
	font-size:75%;
	line-height: 2;
	padding:10%;
	transition-property: transform;
  transition-duration: 1s;
  transform: translateY(0);
}
.joindre p:hover{
	transform: translateY(-10%);
	transition-timing-function: cubic-bezier(.6,-0.85,.21,1.53);
}
#joindre{
	letter-spacing: 2px;
	font-size:10px;
	line-height: 2;
}
.wrapperRappel{
	display:flex;
	height:100%;
	flex-wrap:nowrap;
	align-self:flex-end;
	transform:translateY(200%) translateX(-50%);
	position:relative;
}
.don02{
	display:flex;
	align-items:center;
	justify-content:center;
	width:100%;
	border:none;
	height:10vmin;
	background-color:rgba(0, 0, 0,0.5);
	color:white;
	position:relative;
	transition: all 500ms cubic-bezier(0.77, 0, 0.175, 1);
}
.btn:before, .btn:after {
	content: '';
	position: absolute;	
	transition: inherit;
	z-index: -1;
}

.btn:hover {
	color: white;
	transition-delay: .5s;
}

.btn:hover:before {
	transition-delay: 0s;
}

.btn:hover:after {
	background: rgba(9, 118, 165, 0.5);
	transition-delay: .35s;
}
.hebergement:hover:after {
	background: LightBlue;
	transition-delay: .35s;
}
.ecoute:hover:after {
	background: LightBlue;
	transition-delay: .35s;
}
.don02:hover:after {
	background: LightBlue;
	transition-delay: .35s;
}
.benevole:hover:after {
	background: LightBlue;
	transition-delay: .35s;
}
.from-left:before, 
.from-left:after {
	top: 0;
	width: 0;
	height: 100%;
}

.from-left:before {
	right: 0;
	border: 1px solid white;
	border-left: 0;
	border-right: 0;	
}

.from-left:after {
	left: 0;
}

.from-left:hover:before,
.from-left:hover:after {
	width: 100%;
}
.benevole{
	display:flex;
	align-items:center;
	justify-content:center;
	width:100%;
	border:none;
	margin-left:10%;
	height:10vmin;
	background-color:rgba(0, 0, 0,0.5);
	color:white;
	position:relative;
	transition: all 500ms cubic-bezier(0.77, 0, 0.175, 1);
}

/*MEDIAQUERIES TABLETTE (375PX).......................................................*/
@media screen and (max-width: 768px) and (min-width: 375px){
	.slogan{
	width:60%;
	letter-spacing: 6px;
	font-size:90%;
	line-height: 2;
	transform:translate(0%);
}
hr{
	width:60%;
}
.wrapperButton{
	width:40%;
	left:0;
	transform:translateX(75%);
	display:flex;
	flex-wrap:wrap;
	justify-content:center;
}
.don{
	font-size:13px;
}

.testament{
	margin-top:5%;
}
.raison{
	width:60%;
	height:40vmin;
	letter-spacing: 2px;
	font-size:13px;
	margin-top:40%;
	transform:translateX(0%);
}
.temoin{
	text-align:center;
	width:100%;
	height:30vmin;
	font-size:14px;
	transform:translateX(10%);
}
.carrousel{
	width:100%;
	height:40vmin;
	font-size:12px;
}
.wrapperCarrousel{
position:absolute;
display:flex;
justify-content: center;
flex-wrap:wrap;
width:80%;
height:80vmin;
margin-top:90vmin;
}
.joindre{
	position:absolute;
	display:flex;
	width:100%;
}
.sectionFlex{
 display:flex;
	justify-content:center;
	align-items:center;
	flex-wrap:nowrap;
	width:70%;
	height:60vmin;
	margin-top:120vmin;
	right:13%;
}
.blockBleu{
	height:1400px;
}
.wrapperService{
	transform:translateY(100%) translateX(75%);
	font-size:13px;
}
.wrapperRappel{
	transform:translateY(200%) translateX(-35%);
}
}
@media screen and (max-width: 374px) and (min-width: 0px){
	.slogan{
	width:60%;
	letter-spacing: 6px;
	font-size:80%;
	line-height: 2;
	transform:translate(0%);
}
hr{
	display:none;
}
.wrapperButton{
	width:40%;
	left:0;
	transform:translateX(75%);
	display:flex;
	flex-wrap:wrap;
	justify-content:center;
}
.don{
	font-size:13px;
}

.testament{
	margin-top:5%;
}
.raison{
	width:60%;
	height:50vmin;
	letter-spacing: 2px;
	font-size:12px;
	margin-top:40%;
	transform:translateX(0%);
}
.temoin{
	text-align:center;
	width:100%;
	height:30vmin;
	font-size:14px;
	transform:translateX(10%);
}
.swiper-slide{
	font-size:12px;
}

.carrousel{
	width:100%;
	height:40vmin;
	font-size:12px;
}
.wrapperCarrousel{
position:absolute;
display:flex;
justify-content: center;
flex-wrap:wrap;
width:80%;
height:80vmin;
margin-top:90vmin;
}
.joindre{
	position:absolute;
	display:flex;
	width:100%;
}
.joindre p{
	letter-spacing: 1.6px;
	font-size:11px;
	line-height: 1;
	padding:4%;
	transition-property: transform;
  transition-duration: 1s;
  transform: translateY(0);
}
#joindre{
	letter-spacing: 1.6px;
	font-size:8px;
	line-height: 1;
}
.sectionFlex{
 display:flex;
	justify-content:center;
	align-items:center;
	flex-wrap:nowrap;
	width:70%;
	height:60vmin;
	margin-top:120vmin;
	right:13%;
}
.blockBleu{
	height:1400px;
}
.wrapperService{
	transform:translateY(100%) translateX(75%);
	font-size:13px;
}
.wrapperRappel{
	transform:translateY(200%) translateX(-35%);
}
.hebergement{
	display:flex;
	align-items:center;
	justify-content:center;
	width:300px;
	height:15vmin;
	margin-top:15%;
	background-color:rgba(0, 0, 0,0.5);
	color:white;
	position:relative;
	transition: all 500ms cubic-bezier(0.77, 0, 0.175, 1);
}
.ecoute{
	display:flex;
	align-items:center;
	justify-content:center;
	width:100px;
	height:15vmin;
	background-color:rgba(0, 0, 0,0.5);
	color:white;
	position:relative;
	transition: all 500ms cubic-bezier(0.77, 0, 0.175, 1);
}
.don02{
	display:flex;
	align-items:center;
	justify-content:center;
	width:100px;
	border:none;
	height:10vmin;
	background-color:rgba(0, 0, 0,0.5);
	color:white;
	position:relative;
	transition: all 500ms cubic-bezier(0.77, 0, 0.175, 1);
}
.wrapperRappel{
	display:flex;
	height:100%;
	flex-wrap:nowrap;
	align-self:flex-end;
	transform:translateY(200%) translateX(-25%);
	position:relative;
}
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
		<div class="slogan"><hr><p>La principale ressource d'hébergement pour femmes en difficulté au Québec.</p><hr></div>
	</div>
	<div class="contenuAccueil">
	<div class="wrapperButton">
	<button type="button" class="don"><a href ="https://lechainon.go.yo.fr/index.php/don/">Faire un don</a></button>
	<button type="button" class="testament"><a href ="https://lechainon.go.yo.fr/index.php/don/"> Don par testament</a></button>
	</div>
	<div class="wrapperRaison"><div class="raison">
		<h4>Pourquoi faire un don</h4>
		<p>Les dons nous permettent d'aider les femmes en détresses.</p>
	</div></div>

	<div class="wrapperCarrousel">
		<div class="temoin btn from-left">
			<p>"Cette endroit a changé ma vie"</p>
			<p id="nom">-Mme Tremblay</p>
		</div>
	<div class="carrousel">
	<div class="swiper-container">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <!-- Slides -->
		<div class="swiper-slide"><?php the_field('titre-1')?><br>
		<p class="extrait"> <?php the_field('extrait-1')?></p><br>
								<a href= <?php the_field('lien-1')?>>voir plus...</a>
							</div>
		<div class="swiper-slide"><?php the_field('titre-2')?><br>
		<p class="extrait"><?php the_field('extrait-2')?></p><br>
								<a href= <?php the_field('lien-2')?>>voir plus...</a></div>
		<div class="swiper-slide"><?php the_field('titre-3')?><br>
		<p class="extrait"><?php the_field('extrait-3')?></p><br>
								<a href= <?php the_field('lien-3')?>>voir plus...</a></div>
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>

</div>
	</div></div>
	
	<div class="sectionFlex">
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
		
	</div>
		<div class="wrapperService">
		<div class="hebergement btn from-bottom">Service d'hébergement</div>
		<div class="ecoute btn from-bottom">Service d'écoute</div>
		</div>

		<div class="wrapperRappel">
		<button type="button" class="don02 btn from-left"> Faire un don</button>
		<button type="button" class="benevole btn from-left"> Devenez bénévole</button>
		
		</div>
	
	</div>
		
	
		
		</div>
		<div class=blockBleu>
		</div>
	
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/ScrollTrigger.min.js" integrity="sha512-wK2NuxEyN/6s53M8G7c6cRUXvkeV8Uh5duYS06pAdLq4ukc72errSIyyGQGYtzWEzvVGzGSWg8l79e0VkTJYPw==" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js" integrity="sha512-IQLehpLoVS4fNzl7IfH8Iowfm5+RiMGtHykgZJl9AWMgqx0AmJ6cRWcB+GaGVtIsnC4voMfm8f2vwtY+6oPjpQ==" crossorigin="anonymous"></script>
<script>
	/*JAVA............................................................*/
	
	gsap.from('.bodyAccueil',{
  opacity:0,
  y:100,
  delay:0.5
})
gsap.from('hr', {
  opacity:0,
  width:0,
  delay:0.9
})
gsap.from('.slogan', {
  opacity:0,
  duration:1.5,
  delay:0.9
})
//SWIPPER..................................................................
var mySwiper = new Swiper('.swiper-container', {
  // Optional parameters
  loop: true,
  slidesPerView: 2,
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