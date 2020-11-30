<?php
/**
 * Template Name: page-don
 */

// Appel le fichier header.php
get_header(); 

// Est-ce que nous avons des pages à afficher ?
if ( have_posts() ) : 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>
<style>
	.titreDon{
		display:flex;
		justify-content:center;
	}
	.contenuPageDon{
		display:flex;
		justify-content:center;
		flex-wrap:wrap;
		background-color:rgba(9, 118, 165,0.5);
		padding:5%;
		margin-top:5%;
	}
	h3{
		width:100%;
		text-align:center;
	
	}
	.wrapperSection{
		display:flex;
		justify-content:space-between;
		flex-wrap:nowrap;
		width:100%;

	}
	.section{
		width:25%;
		background-color:rgba(0, 0, 0,0.5);
		padding:2%;
	}
	.type{
		background-color:rgba(0, 0, 0,0.5);
		padding:2%;
		line-height:1.6;
	}
	a:link{
		color:white;
	}
	a:visited{
		color:white;
	}
	
	</style>
	<article>
		<div class="titreDon">
			<h2>
				<?php the_title(); 
				/* Titre de la page */ ?>
			</h2>
		</div>
		<div class="contenuPageDon">
			<?php the_content(); 
			/* Affiche le contenu principal de la page */ ?>
		</div>
	</article>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js" integrity="sha512-IQLehpLoVS4fNzl7IfH8Iowfm5+RiMGtHykgZJl9AWMgqx0AmJ6cRWcB+GaGVtIsnC4voMfm8f2vwtY+6oPjpQ==" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/ScrollTrigger.min.js" integrity="sha512-wK2NuxEyN/6s53M8G7c6cRUXvkeV8Uh5duYS06pAdLq4ukc72errSIyyGQGYtzWEzvVGzGSWg8l79e0VkTJYPw==" crossorigin="anonymous"></script>
	<script>
		gsap.registerPlugin(ScrollTrigger);

const section = document.querySelectorAll('.section');
gsap.timeline({
  scrollTrigger: {
    scrub: 1,
    markers: true,
    start: 'top 100%',
    end: 'bottom 100%',
    trigger: section,
  }
})

.from('.section',{
  opacity:0,
  y:100,
  stagger: 0.2
})
gsap.from('.contenuPageDon',{
  opacity:0,
  y:100,
  delay:0.5
})
gsap.from('.titreDon', {
  opacity:0,
  duration:1.5,
  delay:0.9
})
</script>
<?php endwhile; // Fermeture de la boucle ?>

<?php else : // Si aucune page correspondante n'a été trouvée ?>
	<h2>Oh oh, la page recherchée est disparue</h2>
	<img src="https://i.giphy.com/media/3o8doR2qGIXQDGCVoY/giphy.webp" alt="Page disparue">
<?php endif; 

// Appel le fichier footer.php
get_footer(); ?>