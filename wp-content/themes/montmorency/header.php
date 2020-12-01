<?php
	/*-----------------------------------------------------------------------------------*/
	/* Affiche l'entête (Header) sur toutes vos pages
	/*-----------------------------------------------------------------------------------*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title>
</title>
<?php 
	// Tous les .css et .js sont chargés dans le fichier functions.php
?>

<?php wp_head(); 
/* Cette fonction permet à Wordpress et aux plugins d'instancier des fichier css et js dans le <head>
	 Supprimer cette fonction briserait des plugins et fonctionnalité de Wordpress. 
	 À la limite vous pouvez la déplacer, mais gardez là. */
?>
</head>

<body 
	<?php body_class(); 
	/* Applique une classe contextuel sur le body
		 ex: sur la page d'accueil vous aurez la classe "home"
		 sur un article, "single postid-{ID}"
		 etc. */
	?>
>
<style>
	body,
html {
  margin: 0;
  width: 100%;
  height: 100%;
}

.header {
  width: 100%;
  height: 150px;
  background-color: #333333;
  display: flex;
  align-items: center;
  font-family: Noto Sans KR;
  position: fixed;
  top:0;
  z-index:10;
  border-bottom: 5px solid rgba(9, 118, 165,0.5);
}

.logo img {
  width: 300px;
  position: relative;
  left: 20px;
  transition-duration: 0.8s;
}

.logo img:hover{
  transform: scale(0.8);
  transition-duration: 0.8s;
}

.nav {
  position: absolute;
  right: 150px;
  flex-wrap: nowrap;
}

.nav a {
  margin-left: 20px;
  color: #d1cdcd;
  font-size: 20px;
  transition-duration: 0.8s;
  
}

.nav a:hover{
  color:#04a1e6;
  transition-duration: 0.8s;
}

a {
  text-decoration: none;
}

.lang {
  position: absolute;
  right: 40px;
}

.lang button {
  font-size: 20px;
  background-color: #707070;
  border: 0;
  color: #333333;
  padding: 10px 5px;
  cursor: pointer;
  transition-duration: 0.8s;
}


.lang button:hover{
  background-color:#04a1e6;
  transition-duration: 0.8s;
}

.burger {
  width: 50px;
  height: 50px;
  background-color: #707070;
  opacity: 0.5;
  position: absolute;
  top: 175px;
  left: 25px;
  cursor: pointer;
  z-index: 3;
}

.l1 {
  width: 35px;
  height: 2px;
  background-color: #3a96c5;
  opacity: 1;
  position: absolute;
  top: 25%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.l2 {
  width: 20px;
  height: 2px;
  background-color: #3a96c5;
  opacity: 1;
  position: absolute;
  top: 50%;
  left: 7.5px;
  transform: translateY(-50%);
}

.l3 {
  width: 35px;
  height: 2px;
  background-color: #3a96c5;
  opacity: 1;
  position: absolute;
  top: 75%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.menu {
  display: none;
  flex-direction: column;
  position: absolute;
  opacity: 0;
  width: 350px;
  top: 0;
  height: 100vh;
  background-color: #04a1e6;
  z-index: 2;
}

.menu a {
  position: relative;
  color: #d1cdcd;
  top: 185px;
  left: 100px;
  margin-bottom: 50px;
  font-size: 20px;
  transition-duration: 0.8s;
}

.menu a:hover{
  color:#50a9dd;
  transition-duration: 0.8s;
}

.donMenu{
  background-color: #50a9dd;
  padding:10px 5px;
  border:0;
  width: 75px;
  color: #d1cdcd;
  font-size: 20px;
}

.donMenu:hover{
    background-color: #056791;
    transition-duration: 0.8s;
  }

.mobile {
  display: none;
}

@media screen and (max-width: 900px) {
  .header {
    height: 100px;
  }

  .logo img {
    width: 200px;
    left: 20px;
  }

  .nav {
    right: 100px;
  }

  .nav a {
    font-size: 12px;
  }

  .lang {
    right: 20px;
  }

  .lang button {
    font-size: 12px;
    padding: 5px 3px;
  }

  .burger {
    width: 40px;
    height: 40px;
    top: 125px;
  }

  .l1 {
    width: 30px;
  }

  .l2 {
    width: 20px;
    left: 5px;
  }

  .l3 {
    width: 30px;
  }

  .menu {
    width: 275px;
  }

  .menu a{
    top: 130px;
    left: 100px;
    font-size: 14px;
  }
  
  .donMenu{
  background-color: #50a9dd;
  padding:10px 5px;
  border:0;
  width: 50px;
  font-size: 14px;
}
}

@media screen and (max-width: 600px) {
  .header {
    height: 75px;
  }

  .logo img {
    width: 150px;
    left: 20px;
  }

  .nav {
    display: none;
  }

  .lang {
    display: none;
  }

  .burger {
    width: 30px;
    height: 30px;
    background-color: #707070;
    opacity: 0.5;
    position: absolute;
    right: 20px;
    left: auto;
    top: 20px;
  }

  .l1 {
    width: 20px;
  }

  .l2 {
    width: 10px;
    left: 5px;
  }

  .l3 {
    width: 20px;
  }

  .mobile {
    display: block;
  }
  
  .menu {
    width: 175px;
    right:0;
  }

  .menu a {
    position: relative;
    color: #d1cdcd;
    top: 100px;
    left: 50px;
    margin-bottom: 50px;
    font-size: 12px;
  }
  
  .langMenu{
    width: 40px;
    height: 20px;
    background-color: #707070;
    border: 0;
    cursor:pointer;
    color: #d1cdcd;
  }
  
  .langMenu:hover{
    background-color: #056791;
    transition-duration: 0.8s;
  }
  
  .donMenu{
    background-color: #50a9dd;
    padding:10px 5px;
    border:0;
    width: 50px;
  }
  
}

</style>

<header>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto Sans KR">
	<div class="header">
		<div class="logo">
			<a href="https://lechainon.go.yo.fr/">
			<img src="https://i.imgur.com/QjZ7sMt.png" alt="logo">
			</a>
		</div>
		<div class="nav">
			<a href="https://lechainon.go.yo.fr/evenement/"><?php the_field('evenements'); ?></a>
			<a href="https://lechainon.go.yo.fr/nouvelle/"><?php the_field('nouvelles'); ?></a>
			<a href="https://lechainon.go.yo.fr/contact/"><?php the_field('joindre'); ?></a>
		</div>
		<div class="lang">
			<a href="https://lechainon.go.yo.fr/en/"><button><?php the_field('lang'); ?></button></a>
		</div>
		<div class="burger">
			<div class="l1"></div>
			<div class="l2"></div>
			<div class="l3"></div>
		</div>
		<div class="menu">
			<a href="https://lechainon.go.yo.fr/nos-services/"><?php the_field('services'); ?></a>
			<a href="https://lechainon.go.yo.fr/histoire/"><?php the_field('histoire'); ?></a>
			<a href="https://lechainon.go.yo.fr/nos-valeurs/"><?php the_field('valeurs'); ?></a>
			<a href="https://lechainon.go.yo.fr/equipes/"><?php the_field('equipe'); ?></a>
			<a href="https://lechainon.go.yo.fr/partenaires/"><?php the_field('partenaires'); ?></a>
			<a class="mobile" href="https://lechainon.go.yo.fr/evenement/"><?php the_field('evenements'); ?></a>
			<a class="mobile" href="https://lechainon.go.yo.fr/nouvelle/"><?php the_field('nouvelles'); ?></a>
			<a class="mobile" href="https://lechainon.go.yo.fr/contact/"><?php the_field('joindre'); ?></a>
			<a href="https://lechainon.go.yo.fr/en/"><button class="mobile langMenu"><?php the_field('lang'); ?></button></a>
			<a href="https://lechainon.go.yo.fr/don/"><button class="donMenu"><?php the_field('don'); ?></button></a>
		</div>
	</div>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js'></script><script  src="./script.js"></script>
	<script>
		const burger = document.querySelector(".burger");
		const menu = document.querySelector(".menu");

		burger.addEventListener("click", () => {
		if (menu.style.display == "none" && menu.style.opacity == "0") {
			gsap.to(".menu", 0.1, { display: "flex" });
			gsap.to(".menu", 1, { opacity: 0.8 });
		} else {
			gsap.to(".menu", 1, { opacity: 0 });
			gsap.to(".menu", 1.5, { display: "none" });
		}
		});
	</script>
	<h1>
		<a href="<?php echo esc_url( home_url( '/' ) ); // Lien vers la page d'accueil ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); // Title it with the blog name ?>" rel="home"><?php bloginfo( 'name' ); // Affiche le nom du site ?></a>
	</h1>

	<nav>
		
	</nav>

	<?php 
		// Affiche la description de site se trouvant dans "General Settings" dans l'admin Wordpress
		bloginfo( 'description' ); 
	?>
</header>

<main><!-- Débute le contenu principal de notre site -->
