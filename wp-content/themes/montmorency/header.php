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
	<?php bloginfo('name'); // Affiche le nom du blog ?> | 
	<?php is_front_page() ? bloginfo('description') : wp_title(''); // si nous sommes sur la page d'accueil, affichez la description à partir des paramètres du site - sinon, affichez le titre du post ou de la page. ?>
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

<header>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto Sans KR">
	<div class="header">
		<div class="logo">
			<a href="">
			<img src="https://i.imgur.com/QjZ7sMt.png" alt="logo">
			</a>
		</div>
		<div class="nav">
			<a href="">Événements</a>
			<a href="">Nouvelles</a>
			<a href="">Nous Joindre</a>
		</div>
		<div class="lang">
			<button>ENG</button>
		</div>
		<div class="burger">
			<div class="l1"></div>
			<div class="l2"></div>
			<div class="l3"></div>
		</div>
		<div class="menu">
			<a href="">Nos services</a>
			<a href="">Histoire</a>
			<a href="">Valeur</a>
			<a href="">Equipe</a>
			<a href="">Partenaire</a>
			<a class="mobile" href="">Événements</a>
			<a class="mobile" href="">Nouvelles</a>
			<a class="mobile" href="">Nous Joindre</a>
			<button class="mobile langMenu">ENG</button>
			<button class="donMenu">Faire un don</button>
		</div>
	</div>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js'></script><script  src="./script.js"></script>
	<h1>
		<a href="<?php echo esc_url( home_url( '/' ) ); // Lien vers la page d'accueil ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); // Title it with the blog name ?>" rel="home"><?php bloginfo( 'name' ); // Affiche le nom du site ?></a>
	</h1>

	<nav>
		<?php 
			// Affiche un menu si dans le tableau de bord un menu à été défini dans cet emplacement
			wp_nav_menu( array( 'theme_location' => 'main-menu' ) );
		?>
	</nav>

	<?php 
		// Affiche la description de site se trouvant dans "General Settings" dans l'admin Wordpress
		bloginfo( 'description' ); 
	?>
</header>

<main><!-- Débute le contenu principal de notre site -->
