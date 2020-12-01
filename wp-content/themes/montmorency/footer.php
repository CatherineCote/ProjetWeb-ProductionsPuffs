<?php
	/*-----------------------------------------------------------------------------------*/
	/* Affiche le pied de page (Footer) sur toutes vos pages
	/*-----------------------------------------------------------------------------------*/
?>

</main><!-- Fermeture de la zone de contenu principale -->

<style>
	body,
HTML {
  margin: 0;
  width: 100%;
  height: 100%;
}

.footerContainer {
  height: 100%;
  position: relative;
}

.footer {
  position: fixed;
  bottom: 0;
  display: flex;
  align-items: center;
  width: 100%;
  height: 125px;
  background-color: #333333;
  font-family: Noto Sans KR;
  z-index:10;
}

.logoFoot {
  transform: translateX(-50%);
  position: absolute;
  left: 50%;
}

.logoFoot img {
  width: 200px;
}

.social {
  position: absolute;
  right: 2%;
  width: 300px;
  display: flex;
  justify-content: space-around;
}

.social a {
  color: #d1cdcd;
}

a {
  text-decoration: none;
}

.droitAuteur {
  font-size: 10px;
  position: absolute;
  bottom: 5px;
  right: 5px;
}

.info {
  width: 200px;
  font-size: 15px;
  color: #d1cdcd;
  position: absolute;
  left: 10px;
}

.donFoot {
  width: 75px;
  position: absolute;
  left: 25%;
}

.donFoot button {
  background-color: #3a96c5;
  border: 0;
  padding: 5px 10px;
  cursor: pointer;
}

.donFoot a {
  color: #d1cdcd;
}

.prod {
  position: absolute;
  left: 50%;
  transform: translateX(-50%);
  bottom: 5px;
}

@media screen and (max-width: 900px) {
  .logoFoot img {
    width: 125px;
  }
  .footer {
    height: 85px;
  }
  .social {
    font-size: 12px;
    right: 2%;
    width: 200px;
  }
  .droitAuteur {
    font-size: 8px;
    width: 150px;
  }
  .info {
    width: 175px;
    font-size: 12px;
  }
  .donFoot {
    width: 50px;
    left: 28%;
  }

  .donFoot button {
    padding: 5px 5px;
    font-size: 12px;
  }

  .prod {
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    font-size: 12px;
  }
}

@media screen and (max-width: 600px) {
  .logoFoot img {
    width: 125px;
  }
  .footer {
    height: 300px;
  }
  .social {
    font-size: 12px;
    width: 200px;
    left: 50%;
    transform: translateX(-50%);
    bottom: 75px;
  }
  .droitAuteur {
    font-size: 8px;
    width: 100%;
    text-align: center;
    top: 15px;
  }
  .info {
    width: 200px;
    font-size: 10px;
    right: 30px;
    left: auto;
    bottom: 10px;
  }
  .donFoot {
    width: 50px;
    left: 30px;
    bottom: 10px;
  }

  .prod {
    top: 75px;
  }
}

</style>
<footer>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto Sans KR">
		<div class="footer">
			<a href="<?php the_field('lien_accueil'); ?>" class="logoFoot">
			<img src="https://i.imgur.com/QjZ7sMt.png" alt="logo">
			</a>
			<div class="social">
			<a href="<?php the_field('lien_facebook'); ?>"><?php the_field('facebook'); ?></a>
			<a href="<?php the_field('lien_twitter'); ?>"><?php the_field('twitter'); ?></a>
			<a href="<?php the_field('lien_instagram'); ?>"><?php the_field('instagram'); ?></a>
			</div>
			<div class="droitAuteur">
			<?php the_field('droit'); ?>
			</div>
			<div class="info">
			<?php the_field('info'); ?>
			</div>
			<div class="donFoot"><a href="<?php the_field('lien_don'); ?>"><button><?php the_field('don'); ?></button></a></div>
			<div class="prod"><?php the_field('prod'); ?></div>
		</div>
</footer>

<?php wp_footer(); 
/* Espace où Wordpress peut insérer de fichiers .js et autres pour des plugiciels (plugins) par exemple. 
	 Si vous enlever cette fonction, vous désactiverez du même coups tous vos plugins 🤷. 
	 Vous pouvez toujorus la déplacer, mais garder là */
?>

</body>
</html>
