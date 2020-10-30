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
		.bodyEquipe{
    width:100%;
    height:100vmin;
  }
  h2{
	  display:none;
  }
  .titreEquipe{
  width:25%;
  height:20vmin;
  background-color:black;
  opacity:0.5;
  display:flex;
  justify-content:center;
  align-items:center;
  transform:translateX(150%);
  color:white;
  letter-spacing:15px;
  font-family:helvetica;
  font-size:100%;
  }
  .contenuPageEquipe{
    display:flex;
    flex-wrap:wrap;
    justify-content:center;
    width:60%;
    transform:translateX(35%);
  }
  .postEquipe{
    color:white;
    padding:2%;
  }
 
  .sectionPost{
    color:white;
    background-color:#0976A5;
	width:100%;
  }
  
span{
	font-size:120%;
}
  .sectionPost p{
    padding:2%;
    text-align:center;
    color:white;
  letter-spacing:2px;
  font-family:helvetica;
  font-size:75%;
  transition-property: transform;
    transition-duration: 0.5s;
    transform: translateY(0);
  }
  .sectionPost p:hover {
    transform: translateY(10%);
    transition-timing-function: cubic-bezier(.6,-0.85,.21,1.53);
  }
 img{
	 width:15vmin;
	 height:15vmin;
	 border-radius:100%;
	 display: block;
  margin-left: auto;
  margin-right: auto;
  -webkit-filter: grayscale(100%); 
  filter: grayscale(100%);
	
 }
 img:hover{
	-webkit-filter: grayscale(0%); /* Safari 6.0 - 9.0 */
  filter: grayscale(0%);
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
				<h1>Équipe</h1>
			</div>
		
		<div class="contenuPageEquipe">
			<h3 class="postEquipe">Direction</h3>
		
					<div class="sectionPost">
						<p><span>Linda Beauparlant</span>:  Directrice générale, Association d'entraide Le Chaînon</p>
						<img src="https://images.unsplash.com/photo-1573496358961-3c82861ab8f4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60">
					</div>
				
					<h3 class="postEquipe">Direction</h3>
				
					<div class="sectionPost">
						<p><span>Dragana Pavlovic</span>: Directrice de l'hébergement</p>
						<img src="https://images.unsplash.com/photo-1561677843-39dee7a319ca?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60">
						<hr><p><span>Julie Benoit </span>:Coordonnatrice de l'hébergement </p>
						<img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60">
						
						<hr><p><span>Narjess Sayah</span>:Coordonnatrice de l'hébergement </p>
						<img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80">
					
						<hr><p><span>Véronique Gilbert</span>: Coordonnatrice Maison Yvonne Maisonneuve et Maison Sainte-Marie</p>
						<img src="https://images.unsplash.com/photo-1573496358961-3c82861ab8f4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60">
						
						<hr><p><span>Jean-Philippe Bérubé</span>:Coordonnateur de l'hébergement</p>
						<img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80">
						
					</div>
					<h3 class="postEquipe">Para-hébergement</h3>
					<div class="sectionPost">
						<p><span>Odette Montigny</span> : Coordonnatrice des services alimentaires </p>
						<img src="https://images.unsplash.com/photo-1601584795516-9a4541f939f1?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60">
						<hr><p><span>Jean-Marc Nantel </span> : Coordonnateur de la maintenance et de l’approvisionnement </p>
						<img src="https://images.unsplash.com/photo-1573165850883-9b0e18c44bd2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60">
						
					</div>
					<h3 class="postEquipe">Ressources humaines</h3>
					<div class="sectionPost">
						<p><span>Jimmy Lamago</span> : Directeur des ressources humaines</p>
						<img src="https://images.unsplash.com/photo-1563122870-6b0b48a0af09?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"/>
					</div>
					<h3 class="postEquipe">Bénévolat</h3>
					<div class="sectionPost">
						<p><span>Alexandre Martin </span>: Coordonnateur du bénévolat</p>
						<img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"/>
					</div>
					<h3 class="postEquipe">Développement des partenariats</h3>
					<div class="sectionPost">
						<p><span>Katia Poulin</span> : Coordonnatrice du développement des partenariats</p>
						<img src="https://images.unsplash.com/photo-1573497019584-769c02ee89f5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"/>
					</div>
					<h3 class="postEquipe">Secrétariat</h3>
					<div class="sectionPost">
						<p><span>Meaghan Acosta </span>: Coordonnatrice du secrétariat </p>
						<img src="https://images.unsplash.com/photo-1601584795516-9a4541f939f1?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"/>
					</div>
					<h3 class="postEquipe">Magasin du Chaînon</h3>
					<div class="sectionPost">
						<p><span>Stéphane Lamarche </span>: Directeur du Magasin Le Chaînon  </p>
						<img src="https://images.unsplash.com/photo-1573496358961-3c82861ab8f4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"/>
					</div>
					<h3 class="postEquipe">Comptabilité</h3>
					<div class="sectionPost">
						<p><span>Liette Courteau </span> : Comptable-contrôleur </p>
						<img src="https://images.unsplash.com/photo-1573496358961-3c82861ab8f4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"/>
					</div>
					
					
					
			
		</div>
		<script>
			
			</script>
</div>

<?php endwhile; // Fermeture de la boucle ?>

<?php else : // Si aucune page correspondante n'a été trouvée ?>
	<h2>Oh oh, la page recherchée est disparue</h2>
	<img src="https://i.giphy.com/media/3o8doR2qGIXQDGCVoY/giphy.webp" alt="Page disparue">
<?php endif; 

// Appel le fichier footer.php
get_footer(); ?>