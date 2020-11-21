<?php
/**
 * Template Name: page-evenement
 */

// Appel le fichier header.php
get_header(); 

// Est-ce que nous avons des pages à afficher ?
if ( have_posts() ) : 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>
<style>

.wrapperEvenement{
	width:60%;
	color:white;
	background-color:rgba(0,0,0,0.5);
	display:flex;
	justify-content:center;
	padding:30px;
	z-index:1;
	
}
#tous{
	display:flex;
}
#fondation{
	display:none;
}
#chainon{
	display:none;
}
#magasin{
	display:none;
}
#communaute{
	display:none;
}

.contenuPageEquipe
{
	width:75%;
	margin-top:5%;
	display:flex;
	flex-wrap:wrap;
	justify-content:space-between;
	text-align:center;
}
.wrapperInvitation{
	width:30%;
}
.invitation01{
	margin-top:5%;
	height:10vmin;
	background-color:rgba(9, 118, 165,0.5);
}
.invitation01:hover{
	background-color:black;
	opacity:0.5;
	transition-duration: 1s;
}
.invitation02{
	margin-top:5%;
	height:10vmin;
	background-color:rgba(9, 118, 165,0.5);
}
.invitation02:hover{
	background-color:black;
	opacity:0.5;
	transition-duration: 1s;
}
.invitation03{
	margin-top:5%;
	height:10vmin;
	background-color:rgba(9, 118, 165,0.5);
}
.invitation03:hover{
	background-color:black;
	opacity:0.5;
	transition-duration: 1s;
}
.invitation04{
	margin-top:5%;
	height:10vmin;
	background-color:rgba(9, 118, 165,0.5);
}
.invitation04:hover{
	background-color:black;
	opacity:0.5;
	transition-duration: 1s;
}
.invitation05{
	margin-top:5%;
	height:10vmin;
	background-color:rgba(9, 118, 165,0.5);
}
.invitation05:hover{
	background-color:black;
	opacity:0.5;
	transition-duration: 1s;
}
h2{
	width:20%;
	height:20vmin;
	color:white;
	background-color:black;
	opacity:0.5;
	display:flex;
	justify-content:center;
	align-items:center;
}
.titre{
	display:flex;
	justify-content:center;
}
a:link {
  color: white;
  background-color: transparent;
  text-decoration: none;
 
}
a:visited {
  color: white;
  background-color: transparent;
  text-decoration: none;
}
img {
  -webkit-filter: grayscale(100%);
  filter: grayscale(100%);
  transition-duration: 1s;
}

img:hover {
  -webkit-filter: grayscale(0%);
  filter: grayscale(0%);
}
.blockBleu{
	width:100%;
	height:500px;
	clip-path: polygon(0 42%, 100% 0, 100% 100%, 0% 100%);
	background-color:rgba(9, 118, 165,0.5);
	z-index:6;
	
}

a:hover{
color:rgb(9, 118, 165,0.5);
transition-duration: 1s;
}
/*MEDIAQUERIES IPHONE (375PX) TABLETTE (768PX)................................................*/
@media screen and (max-width: 768px) and (min-width: 375px){
	.contenuPageEquipe
{
	width:100%;
}
	.wrapperInvitation{
	width:75%;
	flex-wrap:nowrap;
	margin-left:10%;

	}
	.wrapperEvenement{
	width:100%;
	margin-top:10%;
	font-size:60%;
	
}
h2{
	width:75%;
	height:20vmin;
	
}

}
@media screen and (max-width: 374px) and (min-width: 0px){
	.invitation01{
	height:15vmin;
}
.invitation02{
	height:15vmin;
}
.invitation03{
	height:15vmin;
}
.invitation04{
	height:15vmin;
}
.invitation05{
	height:15vmin;
}
.wrapperInvitation{
	width:100%;
	flex-wrap:nowrap;
	margin-left:25%;

	}
	.wrapperEvenement{
	width:100%;
	margin-left:10%;
	margin-top:10%;
	font-size:60%;
	
}
h2{
	width:75%;
	height:20vmin;
	
}
img{
	width:100px;
	height:100px;
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
		<div class="contenuPageEquipe">
			<div class="wrapperInvitation">
				<div class="invitation01">Tous</div>
				<div class="invitation02">Activité de la fondation</div>
				<div class="invitation03">Activité le chainon</div>
				<div class="invitation04">Activité du magasin</div>
				<div class="invitation05">Activité de la communauté</div>
			</div>
			<?php the_content(); 
			/* Affiche le contenu principal de la page */ ?>
			
		</div>
	</article>
	<div class=blockBleu>
		</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js" integrity="sha512-IQLehpLoVS4fNzl7IfH8Iowfm5+RiMGtHykgZJl9AWMgqx0AmJ6cRWcB+GaGVtIsnC4voMfm8f2vwtY+6oPjpQ==" crossorigin="anonymous"></script>
<script>
gsap.from('.wrapperEvenement',{
  opacity:0,
  y:100,
  delay:0.5
})
gsap.from('.titre', {
  opacity:0,
  duration:1.5,
  delay:0.9
})
const tous = document.querySelector('.invitation01');
tous.addEventListener('click', function() {
  
 console.log("click");
//Partie pour cacher le premier formulaire
document.getElementById("tous").style.display= "flex";
document.getElementById("fondation").style.display= "none";
document.getElementById("chainon").style.display= "none";
document.getElementById("magasin").style.display= "none";
document.getElementById("communaute").style.display= "none";
gsap.from('#tous',{
  opacity:0,
  y:100
})

})
const fondation = document.querySelector('.invitation02');
fondation.addEventListener('click', function() {
  
 console.log("click");
//Partie pour cacher le premier formulaire
document.getElementById("tous").style.display= "none";
document.getElementById("fondation").style.display= "flex";
document.getElementById("chainon").style.display= "none";
document.getElementById("magasin").style.display= "none";
document.getElementById("communaute").style.display= "none";
gsap.from('#fondation',{
  opacity:0,
  y:100
})

})
const chainon = document.querySelector('.invitation03');
chainon.addEventListener('click', function() {
  
 console.log("click");
//Partie pour cacher le premier formulaire
document.getElementById("tous").style.display= "none";
document.getElementById("fondation").style.display= "none";
document.getElementById("chainon").style.display= "flex";
document.getElementById("magasin").style.display= "none";
document.getElementById("communaute").style.display= "none";
gsap.from('#chainon',{
  opacity:0,
  y:100
})
})
const magasin = document.querySelector('.invitation04');
magasin.addEventListener('click', function() {
  
 console.log("click");
//Partie pour cacher le premier formulaire
document.getElementById("tous").style.display= "none";
document.getElementById("fondation").style.display= "none";
document.getElementById("chainon").style.display= "none";
document.getElementById("magasin").style.display= "flex";
document.getElementById("communaute").style.display= "none";
gsap.from('#magasin',{
  opacity:0,
  y:100
})
})
const communaute = document.querySelector('.invitation05');
communaute.addEventListener('click', function() {
  
 console.log("click");
//Partie pour cacher le premier formulaire
document.getElementById("tous").style.display= "none";
document.getElementById("fondation").style.display= "none";
document.getElementById("chainon").style.display= "none";
document.getElementById("magasin").style.display= "none";
document.getElementById("communaute").style.display= "flex";
gsap.from('#communaute',{
  opacity:0,
  y:100
})
})

</script>
<?php endwhile; // Fermeture de la boucle ?>

<?php else : // Si aucune page correspondante n'a été trouvée ?>
	<h2>Oh oh, la page recherchée est disparue</h2>
	<img src="https://i.giphy.com/media/3o8doR2qGIXQDGCVoY/giphy.webp" alt="Page disparue">
<?php endif; 

// Appel le fichier footer.php
get_footer(); ?>