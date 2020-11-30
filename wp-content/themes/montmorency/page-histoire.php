<?php
/**
 * Template Name: page-histoire
 */

// Appel le fichier header.php
get_header(); 

// Est-ce que nous avons des pages à afficher ?
if ( have_posts() ) : 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>
<style>


.titreHistoire{
	display:flex;
	justify-content:center;
	letter-spacing: 15px;
}

.introduction {
  display: flex;
  justify-content: center;
  color: white;
  letter-spacing: 5px;
  font-family: helvetica;
  font-size: 20px;
  padding: 20px;
  color: #0976A5;
}

#fondatrice {
  font-size: 15px;
  padding: 20px;
  color: white;
}

.section2 {
  margin-bottom: 5%;
}

.section3 {
  font-size: 20px;
  color: white;
  height: 25vmin;
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: #0976A5;
  margin-top:5%;
}

.date {
  font-size: 25px;
  padding-right: 30px;
}

.sectionSVG {
  display: flex;
  justify-content: center;
  position: absolute;
}

#megaphone {
  width: 80px;
  height: 100px;
  transform: translateX(-300%) translateY(70%);
}

#echo {
  width: 55px;
  height: 60px;
  transform: translateX(-400%) translateY(125%);
}

.nuage {
  width: 50px;
  height: 25px;
  transform: translateY(-900%) translateX(-200%);
}

.nuage02 {
  width: 50px;
  height: 25px;
  transform: translateY(-700%) translateX(-200%);
}

.nuage03 {
  width: 50px;
  height: 25px;
  transform: translateY(-600%) translateX(2000%);
}

.no01 {
  width: 80px;
  height: 110px;
  transform: translateY(10%);
}

.no02 {
  width: 80px;
  height: 110px;
  transform: translateY(10%);
}

.no03 {
  width: 80px;
  height: 110px;
  transform: translateY(10%);
}

.no04 {
  width: 205px;
  height: 180px;
  transform: translateY(8%);
}

.arbre {
  width: 100px;
  height: 150px;
  transform: translateY(10%);
}

.section4 {
  margin-top: 5%;
  margin-bottom: 30%;
}

.bougie {
  position: relative;
  width: 2%;
  top: 15%;
}

.etage1 {
  width: 10%;
  position: relative;
  top: 12%;
}

.etage2 {
  width: 15%;
  position: relative;
  top: 5.5%;
}

.etage3 {
  width: 20%;
}

.contenantNicolas {
  position: relative;
  width:50%;
  height:30%;
  transform:translateX(50%);
  display: flex;
  flex-direction: column;
  align-items: center;
  -webkit-filter: grayscale(100%);
  filter: grayscale(100%);
  
} 


.bg {
  width: 100%;
  height: 100%;
  left: 0;
  top: 0;
  position: absolute;
  transform-origin: left;
  transform: scaleX(0);
  background-color: black;
  opacity:0.5;
}

.box{
    width: 100%;
	position: relative;
	display:flex;
    justify-content: center;
    align-items: center;
  }
  
  .sac1{
    width: 10%;
    position: relative; 
  }
  
  .sac2{
    width: 10%;
    position: relative; 
  }
  
  .sac3{
    width: 10%;
    position: relative; 
  }
  
  .sac4{
    width: 10%;
    position: relative;
  }
  .box02{
    height: 5vmin;
    width: 100%;
    display: flex;
    flex-direction: column;
    position: relative;
    justify-content: center;
    align-items: center;
  }
  

  .boite{
    width:10%;
    position: relative;
  }
/*RESPONSIVE....................................................*/

@media screen and (max-width: 1140px) and (min-width: 700px) {

  .section2 {
    margin-bottom: 15%;
  }

  .titre {
    width: 30%;
  }

  .titre p {
    letter-spacing: 5px;
    font-family: helvetica;
    font-size: 100%;
    text-align: center;
  }

  .no01 {
    display: none;
  }

  .no02 {
    display: none;
  }

  .arbre {
    display: none;
  }

  .section4 {
    overflow: hidden;
  }

  .nuage03 {
    transform: translateY(-600%) translateX(1000%);
  }

  .nuage02 {
    transform: translateY(-500%) translateX(-100%);
  }

  .nuage {
    transform: translateY(-375%) translateX(-100%);
  }
}

@media screen and (max-width:700px) {
  .section2 {
    margin-bottom: 30%;
  }

  .titre {
    width: 30%;
  }

  .titre p {
    letter-spacing: 5px;
    text-align: center;
    font-family: helvetica;
    font-size: 75%;
  }

  #fondatrice {
    font-size: 12px;
    padding: 10px;
    color: white;
  }

  .section3 {
    font-size: 18px;
    color: white;
    height: 30vmin;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .date {
    padding: 20px;
    font-size: 20px;
  }

  .arbre {
    display: none;
  }

  .no01 {
    display: none;
  }

  .no02 {
    display: none;
  }

  .no03 {
    display: none;
  }

  .section4 {
    overflow: hidden;
  }

  .nuage03 {
    transform: translateY(-600%) translateX(1000%);
  }

  .nuage02 {
    transform: translateY(-500%) translateX(-100%);
  }
}
 

  
  
</style>
	<article>
		<div class=" titreHistoire">
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
	
		<div class="section2">
			<div class="introduction">
				<p>Le Chaînon, une organisation forgée dans la détermination tissée de solidarité</p>
				<p id="fondatrice">La fondatrice, Yvonne Maisonneuve a mis sa détermination 
				au service d’une cause qu’elle croyait juste et importante, celle des femmes
				 en difficulté. Par la suite, de fidèles collaboratrices viennent prêter main
				  forte et se joignent à l’œuvre d’Yvonne Maisonneuve à titre bénévole. Ces 
				  missionnaires urbaines ont forgé les bases du Chaînon, aujourd’hui devenue 
				  la principale maison d’hébergement pour femmes en difficulté au Québec. 
				  Depuis quatre-vingt-cinq ans, des gens de cœur contribuent à son épanouissement.</p>
			</div>
		</div>
		<div class="section3">
			<div class="date">1932</div>
			<div class="text">Yvonne Maisonneuve ouvre un premier foyer d’accueil pour jeunes 
			filles, rue Fairmount à Montréal.</div>
			</div>
			<div class="box02">
    			<img src="https://www.svgrepo.com/show/109888/box.svg" class="boite" alt="boiteCargo">
  			</div>
		<div class="section3">
			<div class="date">1940</div>
			<div class="text">Déménagement au 101, rue de la Gauchetière.</div>
			</div>
		
		<div class="section3">
			<div class="date">1946</div>
			<div class="text">Ajout du service d’accueil de mères avec enfants qui 
			sera offert pendant trente-trois ans.</div>
			</div>
			<div class="section3">
			<div class="date">1947</div>
			<div class="text">Installation d’une unité d’accueil pour fillettes en opération durant vingt ans.</div>
			</div>
		<div class="section3">
			<div class="date">1950</div>
			<div class="text">L’institut Notre-Dame de la Protection est structuré
			 en association dont les membres qui font œuvre de missionnariat urbain 
			 seront appelées « associées ».</div>
		</div><br><br><br><br><br>

		<div class="section3">
			<div class="date">1971</div>
			<div class="text">Yvon Deschamps devient porte-parole. Il parlera du Chaînon durant 30 ans.</div>
			<div class="sectionSVG">
				<svg width="300" height="300">
					<path id="svg2" stroke-width="3" stroke= white fill="none" d="m19.5,58l254,0l0,126l-254,0l0,-126z" />
					<img id="megaphone" class="megaphone" src="https://imagizer.imageshack.com/v2/489x600q90/924/vXIlaB.png"/>
					<img id="echo" class="echo" src="https://imageshack.com/i/pm0hJ5SCp"/>
				</svg>
			</div>
		</div>
		<div class="section3">
			<div class="date">1974</div>
			<div class="text">Une expropriation force la fermeture temporaire de la maison.</div>
		</div>
		<div class="section3">
			<div class="date">1975</div>
			<div class="text">Installation avenue de l’Esplanade dans un immeuble prêté
			 par les Prêtres de Saint-Sulpice. Salariées et bénévoles commencent 
			 à grossir les rangs.</div>
		</div>
		<div class="section3">
			<div class="date">1978</div>
			<div class="text">Adoption de l’appellation Association d’entraide Le Chaînon.</div>
		</div>
		<div class="section3">
			<div class="date">1979</div>
			<div class="text">Tous les services d’hébergement sont désormais dédiés à des femmes seules.</div>
		</div>
		<div class="section3">
			<div class="date">1980</div>
			<div class="text">Yvonne Maisonneuve s’éteint le jour de Noël.</div>
		</div>
		<div class="section3">
			<div class="date">1984</div>
			<div class="text">Réorganisation du service et ajout de places 
			pour des séjours plus longs.</div>
		</div>
		<div class="section3">
			<div class="date">1987 </div>
			<div class="text">Réaménagement des unités d’hébergement et 
			ouverture de l’accueil de nuit comptant 12 places et quatre 
			autres places d’urgence.</div>
		</div>
		<div class="section3">
			<div class="date">1993 </div>
			<div class="text">Ouverture de la première Maison Yvonne-Maisonneuve 
			offrant 14 places à des femmes âgées ayant séjourné au Chaînon.</div>
		</div>
		<div class="section3">
			<div class="date">2000 </div>
			<div class="text">Un incendie cause la perte totale 
			du magasin Le Coffre aux trésors du Chaînon qui rouvre 
			le 13 septembre à son emplacement actuel, boulevard Saint-Laurent.</div>
		</div>
		<div class="section3">
			<div class="date">2003 </div>
			<div class="text">Inauguration de la nouvelle Maison Yvonne-Maisonneuve,
			 mieux adaptée aux besoins des résidantes.</div>
		</div>
		<div class="box">
    <img src="https://www.svgrepo.com/show/97535/dollar-bag.svg" class="sac1" alt="sac">
    
    <img src="https://www.svgrepo.com/show/97535/dollar-bag.svg" class="sac2" alt="sac">
    <img src="https://www.svgrepo.com/show/97535/dollar-bag.svg" class="sac3" alt="sac">
    <img src="https://www.svgrepo.com/show/97535/dollar-bag.svg" class="sac4" alt="sac">
    </div>
		<div class="section3">
			<div class="date">2011</div>
			<div class="text">Grâce à une campagne majeure de financement, 
			Le Chaînon devient propriétaire de la bâtisse qu’il occupe depuis 36 ans.</div>
		</div>
		<div class="contenantNicolas">
  <img src="https://i.imgur.com/X672iSM.png" alt="bougie" class="gateau bougie">
  <img src="https://i.imgur.com/BlbFz3m.png" alt="etage1" class="gateau etage1">
  <img src="https://i.imgur.com/t7rB7Xw.png" alt="etage2" class="gateau etage2">
  <img src="https://i.imgur.com/jqyS52S.png" alt="etage3" class="gateau etage3">
</div>
		<div class="section3 nicolas">
			<div class="date dateNicolas">2013</div>
			<span class="bg"></span>
			<div class="text textWord">Célébrations des 80 ans du Chaînon, 
			devenu la principale ressource d’hébergement pour femmes
			 en difficulté au Québec.<br> La campagne promotionnelle 
			 Maillon à maillon. Le Chaînon est largement diffusée.</div>
		</div>
		<div class="section3">
			<div class="date">2014</div>
			<div class="text">Mise sur pied de La Fondation Le Chaînon vouée
			 exclusivement à soutenir financièrement Le Chaînon.</div>
		</div>
		<div class="section3">
			<div class="date">2015</div>
			<div class="text">La maison principale fait peau neuve suite à un imposant chantier de mise aux normes.</div>
		</div>
		<div class="section3">
			<div class="date">2017</div>
			<div class="text">Inauguration du Parc Yvonne-Maisonneuve.</div>
		</div>
		
		<div class="section3">
			<div class="date">2018 </div>
			<div class="text">Le Chaînon célèbre ses 86 ans.</div>
		</div>
		
		<div class="section4">
			<img class="maison nuage" src="https://imageshack.com/i/poRiw8jDp"/>
			<img class="maison nuage02" src="https://imageshack.com/i/poRiw8jDp"/>
			<img class="maison nuage03" src="https://imageshack.com/i/poRiw8jDp"/>
			<img class="maison arbre" src="https://imageshack.com/i/pmLUhKAtp"/>
			<img class="maison no01" src="https://imageshack.com/i/pnWG5xwYp"/>
			<img class="maison no02" src="https://imageshack.com/i/pnWG5xwYp"/>
			<img class="maison arbre" src="https://imageshack.com/i/pmLUhKAtp"/>
			<img class="maison no03" src="https://imageshack.com/i/pnWG5xwYp"/>
			<img class="maison no04" src="https://imageshack.com/i/posFVB8lp"/>
			<img class="maison arbre" src="https://imageshack.com/i/pmLUhKAtp"/>
			<img class="maison no03" src="https://imageshack.com/i/pnWG5xwYp"/>
			<img class="maison arbre" src="https://imageshack.com/i/pmLUhKAtp"/>
			<hr class="sol">
			</div>
			
			<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/ScrollTrigger.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/MotionPathPlugin.min.js" integrity="sha512-2vgSeT4mD0azBGIp91Fnho9fbT8ZG8zu5c+mK//TGxj4YNX2mRAwEZHtZsMRwA7ObqH6Vl7mMOdvkzNVTuhUcA==" crossorigin="anonymous"></script>		
<script>
gsap.registerPlugin(ScrollTrigger);

//ANIMATION DE LA SECTION 2 ..................................................

const section2 = document.querySelector('.section2');
gsap.timeline({
    scrollTrigger: {
      scrub: 1,
      markers: true,
      start: 'top 75%',
      end: 'bottom 25%',
      trigger: section2,
    }
  })

  .from('.section2', {
    opacity: 0,
    y: 100
  })

//ANIMATION SECTION 3........................................................

const section3 = document.querySelector('.section3');
gsap.timeline({
    scrollTrigger: {
      scrub: 1,
      markers: false,
      start: 'top 100%',
      end: 'bottom 50%',
      trigger: section3,
    }
  })

  .from('.section3', {
    opacity: 0,
    y: 100
  })

//Créer une variable pour le SVG 
//Utilise le "+2" pour l'ajouter à la class
var svg2 = document.querySelector('#svg' + 2);
var tl = gsap.timeline({
    scrollTrigger: {
      scrub: 1,
      markers: true,
      start: 'top 50%',
      end: 'bottom 100%',
      trigger: svg2,
    }

  })

  .to('.sectionSVG', {
    y: -150,
    delay: 0.9
  })
  .from('.megaphone', {
    rotation: 50,
    delay: 0.9
  })
  .to('.megaphone', {
    rotation: -5,
    transformOrigin: "50px 50px",
    ease: Back,
    delay: 0.9
  })

//ANIMATION INFINI DE L'ECHO...............................

const echo = document.querySelectorAll('.echo');
gsap.timeline({
    scrollTrigger: {
      trigger: echo,
    }
  })
  .to('.echo', {
    scale: 1.2,
    repeat: -1,
    yoyo: true
  })

//ANIMATION RECTANGLE............................................................

//Créer la fonction personnalisé
tl.add(rectangle(svg2));

//Cette fonction crée un tween qui va animer la stroke du SVG
function rectangle(svg) {
  var trajet = {
    length: 0,
    pathLength: svg.getTotalLength()
  };
  var animation = gsap.to(trajet, 2, {
    length: trajet.pathLength,
    onUpdate: drawLine,
    onUpdateParams: [trajet, svg],
    immediateRender: true
  });
  return animation;
};


//Update de la stroke  
function drawLine(obj, svg) {
  svg.style.strokeDasharray = [obj.length, obj.pathLength].join(' ');
};

//ANIMATION  NICOLAS.........................................................
const gateau = gsap
  .timeline({
    scrollTrigger: {
      trigger: ".contenantNicolas",
      start: "50%",
	  end: "50%",
      pin: true,
      scrub: 1
    }
  })

  .from(".etage3", {
    opacity: 0,
    y: 100
  })
  .from(
    ".etage2",
    {
      opacity: 0,
      y: -100
    },
    "<"
  )
  .from(".etage1", {
    opacity: 0
  })
  .from(".bougie", {
    opacity: 0,
    y: 100
  });
  //DEUXIEME................................................................
  const nicolas = document.querySelector('.nicolas');
gsap.timeline({
    scrollTrigger: {
      scrub: 1,
      markers: false,
      start: 'top 0%',
    end: 'bottom 0%',
      trigger: nicolas,
    }
  })
  .from(".dateNicolas", 1, { y: -50, opacity: 0 })
  .to(".bg", 0.9, { scaleX: 1 })
  .from(".textWord", 2, { opacity: 0 })
  .to(".bg", 0.9, { scaleX: 0 });

//ANIMATION STEAVEN..........................................................
gsap.timeline({
  scrollTrigger: {
    scrub: 1,
    start: 'top 0%',
    end: 'bottom 50%',
    trigger: '.box',
    pin: true
  },
})
.from(".sac1", {
  opacity: 0,
  y:-200
})

.from(".sac2", {
  opacity: 0,
  y:-200
})
.from(".sac3", {
  opacity: 0,
  y:-200
})

.from(".sac4", {
  opacity: 0,
  y:-200
})

//DEUXIEME ANIMATION STEAVEN.................................................
gsap.timeline({
  scrollTrigger: {
    scrub: 1,
    start: "50% 50%",
    trigger: '.box02',
    pin: true
  },
})
  
.from(".boite", {
  scale:10,
  rotate: 150,
  opacity: 0,
  delay: 0.2
})

.to(".boite", {
  rotate:-90,
  x: -200,
  y: -100
})

.to(".boite", {
    rotate:-180,
    x: -400,
    y: 100
  })

  .to(".boite", {
    rotate:-270,
    x: -600,
    y: -50
  })
  
  .to(".boite", {
      rotate:-360,
      x: -800,
      y: 50,
      opacity: 0
    })


//ANIMATION SECTION 4........................................................

const section4 = document.querySelector('.section4');
gsap.timeline({
    scrollTrigger: {
      scrub: 1,
      markers: false,
      start: 'top 75%',
      end: 'bottom 75%',
      trigger: section4,
    }
  })

  .from('.maison', {
    y: '100%',
    stagger: 0.2
  })
  .from('.sol', {
    scaleX: 0

  })

  //ANIMATION NUAGE INFINI.............................................

  const nuage = document.querySelectorAll('.nuage');
gsap.timeline({
    scrollTrigger: {
      trigger: nuage,
    }
  })
  .to('.nuage', {
    x: '2650%',
    duration: 50,
    delay: 1,
    repeat: -1,
  })
const nuage02 = document.querySelectorAll('.nuage02');
gsap.timeline({
    scrollTrigger: {
      trigger: nuage02,
    }
  })
  .to('.nuage02', {
    x: '2650%',
    duration: 60,
    repeat: -1,
  })
const nuage03 = document.querySelectorAll('.nuage03');
gsap.timeline({
    scrollTrigger: {
      trigger: nuage03,
    }
  })
  .to('.nuage03', {
    x: '-1800%',
    duration: 90,
    repeat: -1,
  })
			</script>
<?php endwhile; // Fermeture de la boucle ?>

<?php else : // Si aucune page correspondante n'a été trouvée ?>
	<h2>Oh oh, la page recherchée est disparue</h2>
	<img src="https://i.giphy.com/media/3o8doR2qGIXQDGCVoY/giphy.webp" alt="Page disparue">
<?php endif; 

// Appel le fichier footer.php
get_footer(); ?>