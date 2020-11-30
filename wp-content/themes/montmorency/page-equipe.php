<?php
/**
 * Template Name: page-equipe
 */

// Appel le fichier header.php
get_header(); 


// Est-ce que nous avons des pages à afficher ?
if ( have_posts() ) : 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>
<style>
.bodyEquipe {
  width: 100%;
  height: 100vmin;
  position:relative;
}

/*HAUT DE LA PAGE..................................................................*/
h2 {
  display: none;
}

.titreEquipe {
  width: 25%;
  height: 20vmin;
  background-color: black;
  opacity: 0.5;
  display: flex;
  justify-content: center;
  align-items: center;
  transform: translateX(150%);
  color: white;
  letter-spacing: 15px;
  font-size: 100%;
}

/*CONTENU...........................................................................*/
.contenuPageEquipe {
  position:relative;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  width: 60%;
  transform: translateX(35%);
}

.postEquipe {
  color: white;
  padding: 2%;
}

.sectionPost {
  color: white;
  background-color: #0976A5;
  width: 100%;
}

span {
  font-size: 120%;
}

.sectionPost p {
  padding: 2%;
  text-align: center;
  color: white;
  letter-spacing: 2px;
  font-family: helvetica;
  font-size: 75%;
  transition-property: transform;
  transition-duration: 0.5s;
  transform: translateY(0);
}

.sectionPost p:hover {
  transform: translateY(10%);
  transition-timing-function: cubic-bezier(.6,-0.85,.21,1.53);
}

img {
  width: 15vmin;
  height: 15vmin;
  margin-bottom: 30px;
  border-radius: 100%;
  display: block;
  margin-left: auto;
  margin-right: auto;
  -webkit-filter: grayscale(100%);
  filter: grayscale(100%);
  transition-duration: 1s;
}

img:hover {
  -webkit-filter: grayscale(0%);
  filter: grayscale(0%);
}

/*POPUP..................................................................................*/
.carte01 {
  width: 50vmin;
  height: 50vmin;
  background-color: black;
  opacity: 0.9;
  position: fixed;
  display: none;
  top:0;
}

.carte01 p {
  font-size: 20px;
  position: relative;
  transform: translateY(25%);
  left: 10%;
}
.carte02 {
  width: 50vmin;
  height: 50vmin;
  background-color: black;
  opacity: 0.9;
  margin-top:50vmin;
  position: fixed;
  display: none;
  z-index:1;
  top:0;
}

.carte02 p {
  font-size: 20px;
  position: relative;
  transform: translateY(25%);
  left: 10%;
}
.carte03 {
  width: 50vmin;
  height: 50vmin;
  background-color: black;
  opacity: 0.9;
  position: fixed;
  display: none;
  z-index:1;
  top:10%;
}

.carte03 p {
  font-size: 20px;
  position: relative;
  transform: translateY(25%);
  left: 10%;
}
.carte04 {
  width: 50vmin;
  height: 50vmin;
  background-color: black;
  opacity: 0.9;
  position: fixed;
  display: none;
  z-index:1;
  top:10%;
}

.carte04 p {
  font-size: 20px;
  position: relative;
  transform: translateY(25%);
  left: 10%;
}
.carte05 {
  width: 50vmin;
  height: 50vmin;
  background-color: black;
  opacity: 0.9;
  top:25%;
  position: fixed;
  display: none;
  z-index:1;
}

.carte05 p {
  font-size: 20px;
  position: relative;
  transform: translateY(25%);
  left: 10%;
}
.carte06 {
  width: 50vmin;
  height: 50vmin;
  background-color: black;
  opacity: 0.9;
  top:25%;
  position: fixed;
  display: none;
  z-index:1;
}

.carte06 p {
  font-size: 20px;
  position: relative;
  transform: translateY(25%);
  left: 10%;
}
.carte07 {
  width: 50vmin;
  height: 50vmin;
  background-color: black;
  opacity: 0.9;
  position: fixed;
  display: none;
  top:40%;
  z-index:1;
}

.carte07 p {
  font-size: 20px;
  position: relative;
  transform: translateY(25%);
  left: 10%;
}
.carte08 {
  width: 50vmin;
  height: 50vmin;
  background-color: black;
  opacity: 0.9;
  position: fixed;
  top:40%;
  display: none;
  z-index:1;
}

.carte08 p {
  font-size: 20px;
  position: relative;
  transform: translateY(25%);
  left: 10%;
}
.carte09 {
  width: 50vmin;
  height: 50vmin;
  background-color: black;
  opacity: 0.9;
  position: fixed;
  top:55%;
  display: none;
  z-index:1;
}

.carte09 p {
  font-size: 20px;
  position: relative;
  transform: translateY(25%);
  left: 10%;
}
.carte10 {
  width: 50vmin;
  height: 50vmin;
  background-color: black;
  opacity: 0.9;
  position: fixed;
  top:60%;
  display: none;
  z-index:1;
}

.carte10 p {
  font-size: 20px;
  position: relative;
  transform: translateY(25%);
  left: 10%;
}
.carte11 {
  width: 50vmin;
  height: 50vmin;
  background-color: black;
  opacity: 0.9;
  position: fixed;
  top:65%;
  display: none;
  z-index:1;
}
.carte11 p {
  font-size: 20px;
  position: relative;
  transform: translateY(25%);
  left: 10%;
}
.carte12 p {
  font-size: 20px;
  position: relative;
  transform: translateY(25%);
  left: 10%;
}
.carte12 {
  width: 50vmin;
  height: 50vmin;
  background-color: black;
  opacity: 0.9;
  position: fixed;
  top:75%;
  display: none;
  z-index:1;
}

.carte13 p {
  font-size: 20px;
  position: relative;
  transform: translateY(25%);
  left: 10%;
}
.carte13 {
  width: 50vmin;
  height: 50vmin;
  background-color: black;
  opacity: 0.9;
  position: fixed;
  top:85%;
  display: none;
  z-index:1;
}
.carte14 p {
  font-size: 20px;
  position: relative;
  transform: translateY(25%);
  left: 10%;
}
.carte14 {
  width: 50vmin;
  height: 50vmin;
  background-color: black;
  opacity: 0.9;
  position: fixed;
  top:90%;
  display: none;
  z-index:1;
}
/*ANIMATION BOUTON X/BACK....................................................................*/
.outer {
  position: relative;
  margin: auto;
  width: 50px;
  margin-top: 200px;
  transform: translateX(-50%);
  cursor: pointer;
}

.inner {
  width: inherit;
  text-align: center;
}

label {
  font-size: .6em;
  line-height: 4em;
  text-transform: uppercase;
  color: white;
  transition: all .3s ease-in;
  opacity: 0;
  cursor: pointer;
}

.inner:before, .inner:after {
  position: absolute;
  content: '';
  height: 1px;
  width: inherit;
  background: white;
  left: 0;
  transition: all .3s ease-in;
}

.inner:before {
  top: 50%;
  transform: rotate(45deg);
}

.inner:after {
  bottom: 50%;
  transform: rotate(-45deg);
}

.outer:hover label {
  opacity: 1;
}

.outer:hover .inner:before,
.outer:hover .inner:after {
  transform: rotate(0);
}

.outer:hover .inner:before {
  top: 0;
}

.outer:hover .inner:after {
  bottom: 0;
}
.blockBleu{
	width:100%;
  margin-top:310vmin;
	height:1100px;
  visibility: hidden;
	clip-path: polygon(0 0, 100% 41%, 100% 100%, 0% 100%);
	background-color:rgba(9, 118, 165,0.5);
	
}
/*MEDIAQUERIES IPHONE (375PX)................................................*/
@media screen and (max-width: 375px) and (min-width: 0px){
  .titreEquipe{
  width: 25%;
  height: 15vmin;
  letter-spacing: 5px;
  font-size: 40%;
  }
  span {
  font-size: 100%;
}

.sectionPost p {
  font-size: 80%;
}
.blockBleu{
	width:100%;
  margin-top:310vmin;
	height:2000px;
  visibility: hidden;
	clip-path: polygon(0 0, 100% 41%, 100% 100%, 0% 100%);
	background-color:rgba(9, 118, 165,0.5);
	
}
}
/*MEDIAQUERIES IPHONE (768PX)................................................*/
@media screen and (max-width: 768px) and (min-width: 376px){
  .titreEquipe{
  width: 25%;
  height: 15vmin;
  letter-spacing: 5px;
  font-size: 60%;
  }
  span {
  font-size: 100%;
}

.sectionPost p {
  font-size: 80%;
}
}
	</style>

	<article>
			<h2>
				<?php the_title(); 
				/* Titre de la page */ ?>
			</h2>
			<?php the_content(); 
			/* Affiche le contenu principal de la page */ ?>
	</article>
	 <div class="bodyEquipe">
			<div class=" titreEquipe">
				<h1><?php the_field('titre')?></h1>
			</div>
		
		<div class="contenuPageEquipe">
			<h3 class="postEquipe"><?php the_field('titre_poste-1')?></h3>
		
					<div class="sectionPost">
						<p><span><?php the_field('nom-1')?></span>: <?php the_field('description-1')?></p>
						<img class="popup" src="https://images.unsplash.com/photo-1561677843-39dee7a319ca?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"/> 
					</div>
					<div class="carte01" id="carte01">
					<p><?php the_field('description-1')?> </p>
					<div class="outer">
						<div class="inner">
							<label class="x">Back</label>
						</div>
						</div>
					</div>
				
			<h3 class="postEquipe"><?php the_field('titre_poste-2')?></h3> 
      <div class="carte02" id="carte02">
					<p><?php the_field('description-2')?> </p>
					<div class="outer">
						<div class="inner">
							<label class="x02">Back</label>
						</div>
						</div>
					</div>
          <div class="carte03" id="carte03">
					<p></span><?php the_field('description-3')?> </p>
					<div class="outer">
						<div class="inner">
							<label class="x03">Back</label>
						</div>
						</div>
					</div>
          <div class="carte04" id="carte04">
					<p><?php the_field('description-4')?> </p>
					<div class="outer">
						<div class="inner">
							<label class="x04">Back</label>
						</div>
						</div>
					</div>
          <div class="carte05" id="carte05">
					<p><?php the_field('description-5')?> </p>
					<div class="outer">
						<div class="inner">
							<label class="x05">Back</label>
						</div>
						</div>
					</div>
          <div class="carte06" id="carte06">
					<p><?php the_field('description-6')?> </p>
					<div class="outer">
						<div class="inner">
							<label class="x06">Back</label>
						</div>
						</div>
					</div>
				
				
				<div class="sectionPost">
					<p><span><?php the_field('nom-2')?></span>: <?php the_field('description-2')?></p>
					<img class="popup02" src="https://images.unsplash.com/photo-1561677843-39dee7a319ca?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60">
	
					<hr><p><span><?php the_field('nom-3')?> </span>:<?php the_field('description-3')?> </p>
					<img class="popup03" src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60">
						
					<hr><p><span><?php the_field('nom-4')?></span>:<?php the_field('description-4')?> </p>
					<img class="popup04" src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80">
					
					<hr><p><span><?php the_field('nom-5')?></span>: <?php the_field('description-5')?></p>
					<img class="popup05" src="https://images.unsplash.com/photo-1573496358961-3c82861ab8f4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60">
						
					<hr><p><span><?php the_field('nom-6')?></span>:<?php the_field('description-6')?></p>
					<img class="popup06" src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80">
						
				</div>
        <div class="carte07" id="carte07">
					<p> <?php the_field('description-7')?></p>
					<div class="outer">
						<div class="inner">
							<label class="x07">Back</label>
						</div>
						</div>
					</div>
          <div class="carte08" id="carte08">
					<p><?php the_field('description-8')?> </p>
					<div class="outer">
						<div class="inner">
							<label class="x08">Back</label>
						</div>
						</div>
					</div>
				<h3 class="postEquipe"><?php the_field('titre_poste-3')?></h3>
					<div class="sectionPost">
						<p><span><?php the_field('nom-7')?></span> : <?php the_field('description-7')?> </p>
						<img class="popup07"src="https://images.unsplash.com/photo-1601584795516-9a4541f939f1?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60">
						<hr><p><span><?php the_field('nom-7')?></span> : <?php the_field('description-8')?> </p>
						<img class="popup08" src="https://images.unsplash.com/photo-1573165850883-9b0e18c44bd2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60">
						
					</div>
          <div class="carte09" id="carte09">
					<p><?php the_field('description-9')?></p>
					<div class="outer">
						<div class="inner">
							<label class="x09">Back</label>
						</div>
						</div>
					</div>
				<h3 class="postEquipe"><?php the_field('titre_poste-4')?></h3>
					<div class="sectionPost">
						<p><span><?php the_field('nom-9')?></span> : <?php the_field('description-9')?></p>
						<img class="popup09" src="https://images.unsplash.com/photo-1563122870-6b0b48a0af09?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"/>
					</div>
					
          <div class="carte10" id="carte10">
					<p><?php the_field('description-10')?> </p>
					<div class="outer">
						<div class="inner">
							<label class="x10">Back</label>
						</div>
						</div>
					</div>
				<h3 class="postEquipe"><?php the_field('titre_poste-5')?></h3>
					<div class="sectionPost">
						<p><span><?php the_field('nom-10')?> </span>: <?php the_field('description-10')?></p>
						<img class="popup10" src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"/>
					</div>
				
          <div class="carte11" id="carte11">
					<p><?php the_field('description-11')?> </p>
					<div class="outer">
						<div class="inner">
							<label class="x11">Back</label>
						</div>
						</div>
					</div>
				<h3 class="postEquipe"><?php the_field('titre_poste-6')?></h3>
					<div class="sectionPost">
						<p><span><?php the_field('nom-11')?></span> :<?php the_field('description-11')?></p>
						<img class="popup11" src="https://images.unsplash.com/photo-1573497019584-769c02ee89f5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"/>
					</div>
				
          <div class="carte12" id="carte12">
					<p><?php the_field('description-12')?> </p>
					<div class="outer">
						<div class="inner">
							<label class="x12">Back</label>
						</div>
						</div>
					</div>
				<h3 class="postEquipe"><?php the_field('titre_poste-7')?></h3>
					<div class="sectionPost">
						<p><span><?php the_field('nom-12')?></span>: <?php the_field('description-12')?></p>
						<img class="popup12" src="https://images.unsplash.com/photo-1601584795516-9a4541f939f1?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"/>
					</div>
				
          <div class="carte13" id="carte13">
					<p><?php the_field('description-13')?></p>
					<div class="outer">
						<div class="inner">
							<label class="x13">Back</label>
						</div>
						</div>
					</div>
				<h3 class="postEquipe"><?php the_field('titre_poste-8')?></h3>
					<div class="sectionPost">
						<p><span><?php the_field('nom-13')?> </span>: <?php the_field('description-13')?> </p>
						<img class="popup13" src="https://images.unsplash.com/photo-1573496358961-3c82861ab8f4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"/>
					</div>
				
          <div class="carte14" id="carte14">
					<p><?php the_field('description-14')?> </p>
					<div class="outer">
						<div class="inner">
							<label class="x14">Back</label>
						</div>
						</div>
					</div>
				<h3 class="postEquipe"><?php the_field('titre_poste-9')?></h3>
					<div class="sectionPost">
						<p><span><?php the_field('nom-14')?> </span> : <?php the_field('description-14')?> </p>
						<img class="popup14" src="https://images.unsplash.com/photo-1573496358961-3c82861ab8f4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"/>
					</div>
					
		</div>
		</div>
		<div class=blockBleu>
		</div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js" integrity="sha512-IQLehpLoVS4fNzl7IfH8Iowfm5+RiMGtHykgZJl9AWMgqx0AmJ6cRWcB+GaGVtIsnC4voMfm8f2vwtY+6oPjpQ==" crossorigin="anonymous"></script>
<script>
gsap.from('.bodyEquipe',{
  opacity:0,
  y:100,
  delay:0.5
})
//CARTE POPUP NO1..........................................................
const carte = document.querySelector('.popup');
carte.addEventListener('click', function() {
  
 console.log("click");
//Partie pour cacher le premier formulaire
document.getElementById("carte01").style.display= "flex";
gsap.from('.carte01',{
  opacity:0,
  y:100
})

});
const fond = document.querySelector('.x');
fond.addEventListener('click', function() {
  
  console.log("remove");
  //Partie pour cacher le premier formulaire
  document.getElementById("carte01").style.display= "none";
});

//CARTE POPUP NO2..........................................................
const carte02 = document.querySelector('.popup02');
carte02.addEventListener('click', function() {
  
 console.log("click");
//Partie pour cacher le premier formulaire
document.getElementById("carte02").style.display= "flex";
gsap.from('.carte02',{
  opacity:0,
  y:100
})
});
const fond02 = document.querySelector('.x02');
fond02.addEventListener('click', function() {
  
  console.log("remove");
  //Partie pour cacher le premier formulaire
  document.getElementById("carte02").style.display= "none";
});
//CARTE POPUO NO3...............................................................
const carte03 = document.querySelector('.popup03');
carte03.addEventListener('click', function() {
  
 console.log("click");
//Partie pour cacher le premier formulaire
document.getElementById("carte03").style.display= "flex";
gsap.from('.carte03',{
  opacity:0,
  y:100
})
});
const fond03 = document.querySelector('.x03');
fond03.addEventListener('click', function() {
  
  console.log("remove");
  //Partie pour cacher le premier formulaire
  document.getElementById("carte03").style.display= "none";
});
//CARTE POPUO NO4...............................................................
const carte04 = document.querySelector('.popup04');
carte04.addEventListener('click', function() {
  
 console.log("click");
//Partie pour cacher le premier formulaire
document.getElementById("carte04").style.display= "flex";
gsap.from('.carte04',{
  opacity:0,
  y:100
})
});
const fond04 = document.querySelector('.x04');
fond04.addEventListener('click', function() {
  
  console.log("remove");
  //Partie pour cacher le premier formulaire
  document.getElementById("carte04").style.display= "none";
});
		
    //CARTE POPUO NO5...............................................................
const carte05 = document.querySelector('.popup05');
carte05.addEventListener('click', function() {
  
 console.log("click");
//Partie pour cacher le premier formulaire
document.getElementById("carte05").style.display= "flex";
gsap.from('.carte05',{
  opacity:0,
  y:100
})
});
const fond05 = document.querySelector('.x05');
fond05.addEventListener('click', function() {
  
  console.log("remove");
  //Partie pour cacher le premier formulaire
  document.getElementById("carte05").style.display= "none";
});
   //CARTE POPUO NO6...............................................................
   const carte06 = document.querySelector('.popup06');
carte06.addEventListener('click', function() {
  
 console.log("click");
//Partie pour cacher le premier formulaire
document.getElementById("carte06").style.display= "flex";
gsap.from('.carte06',{
  opacity:0,
  y:100
})
});
const fond06 = document.querySelector('.x06');
fond06.addEventListener('click', function() {
  
  console.log("remove");
  //Partie pour cacher le premier formulaire
  document.getElementById("carte06").style.display= "none";
});
 //CARTE POPUO NO7...............................................................
 const carte07 = document.querySelector('.popup07');
carte07.addEventListener('click', function() {
  
 console.log("click");
//Partie pour cacher le premier formulaire
document.getElementById("carte07").style.display= "flex";
gsap.from('.carte07',{
  opacity:0,
  y:100
})
});
const fond07 = document.querySelector('.x07');
fond07.addEventListener('click', function() {
  
  console.log("remove");
  //Partie pour cacher le premier formulaire
  document.getElementById("carte07").style.display= "none";
});
 //CARTE POPUO NO8...............................................................
 const carte08 = document.querySelector('.popup08');
carte08.addEventListener('click', function() {
  
 console.log("click");
//Partie pour cacher le premier formulaire
document.getElementById("carte08").style.display= "flex";
gsap.from('.carte08',{
  opacity:0,
  y:100
})
});
const fond08 = document.querySelector('.x08');
fond08.addEventListener('click', function() {
  
  console.log("remove");
  //Partie pour cacher le premier formulaire
  document.getElementById("carte08").style.display= "none";
});
//CARTE POPUO NO9...............................................................
const carte09 = document.querySelector('.popup09');
carte09.addEventListener('click', function() {
  
 console.log("click");
//Partie pour cacher le premier formulaire
document.getElementById("carte09").style.display= "flex";
gsap.from('.carte09',{
  opacity:0,
  y:100
})
});
const fond09 = document.querySelector('.x09');
fond09.addEventListener('click', function() {
  
  console.log("remove");
  //Partie pour cacher le premier formulaire
  document.getElementById("carte09").style.display= "none";
});
//CARTE POPUO N10...............................................................
const carte10 = document.querySelector('.popup10');
carte10.addEventListener('click', function() {
  
 console.log("click");
//Partie pour cacher le premier formulaire
document.getElementById("carte10").style.display= "flex";
gsap.from('.carte10',{
  opacity:0,
  y:100
})
});
const fond10 = document.querySelector('.x10');
fond10.addEventListener('click', function() {
  
  console.log("remove");
  //Partie pour cacher le premier formulaire
  document.getElementById("carte10").style.display= "none";
});
//CARTE POPUO N11...............................................................
const carte11 = document.querySelector('.popup11');
carte11.addEventListener('click', function() {
  
 console.log("click");
//Partie pour cacher le premier formulaire
document.getElementById("carte11").style.display= "flex";
gsap.from('.carte11',{
  opacity:0,
  y:100
})
});
const fond11 = document.querySelector('.x11');
fond11.addEventListener('click', function() {
  
  console.log("remove");
  //Partie pour cacher le premier formulaire
  document.getElementById("carte11").style.display= "none";
});
//CARTE POPUO N12...............................................................
const carte12 = document.querySelector('.popup12');
carte12.addEventListener('click', function() {
  
 console.log("click");
//Partie pour cacher le premier formulaire
document.getElementById("carte12").style.display= "flex";
gsap.from('.carte12',{
  opacity:0,
  y:100
})
});
const fond12 = document.querySelector('.x12');
fond12.addEventListener('click', function() {
  
  console.log("remove");
  //Partie pour cacher le premier formulaire
  document.getElementById("carte12").style.display= "none";
});
//CARTE POPUO N13...............................................................
const carte13 = document.querySelector('.popup13');
carte13.addEventListener('click', function() {
  
 console.log("click");
//Partie pour cacher le premier formulaire
document.getElementById("carte13").style.display= "flex";
gsap.from('.carte13',{
  opacity:0,
  y:100
})
});
const fond13 = document.querySelector('.x13');
fond13.addEventListener('click', function() {
  
  console.log("remove");
  //Partie pour cacher le premier formulaire
  document.getElementById("carte13").style.display= "none";
});
//CARTE POPUO N14...............................................................
const carte14 = document.querySelector('.popup14');
carte14.addEventListener('click', function() {
  
 console.log("click");
//Partie pour cacher le premier formulaire
document.getElementById("carte14").style.display= "flex";
gsap.from('.carte14',{
  opacity:0,
  y:100
})
});
const fond14 = document.querySelector('.x14');
fond14.addEventListener('click', function() {
  
  console.log("remove");
  //Partie pour cacher le premier formulaire
  document.getElementById("carte14").style.display= "none";
});
</script>
<?php endwhile; // Fermeture de la boucle ?>

<?php else : // Si aucune page correspondante n'a été trouvée ?>
	<h2>Oh oh, la page recherchée est disparue</h2>
	<img src="https://i.giphy.com/media/3o8doR2qGIXQDGCVoY/giphy.webp" alt="Page disparue">
<?php endif; 

// Appel le fichier footer.php
get_footer(); ?>