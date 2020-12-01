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
    width: auto;
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
			<a href="" class="logoFoot">
			<img src="https://i.imgur.com/QjZ7sMt.png" alt="logo">
			</a>
			<div class="social">
			<a href="https://www.facebook.com/lechainonmontreal">Facebook</a>
			<a href="https://twitter.com/lechainonmtl">Twitter</a>
			<a href="https://www.instagram.com/lechainon_mtl/">Instagram</a>
			</div>
			<div class="droitAuteur">
			©2020 // Association d'entraide Le Chaînon inc. Tous droits réservés.
			</div>
			<div class="info">
			JOINDRE LE CHAÎNON <br />
			4373, ave. de l'Esplanade
			Montréal (Québec) H2W 1T2<br />
			514 845-0151
			</div>
			<div class="donFoot"><button>Faire un don</button></div>
			<div class="prod">Les Productions Puffs</div>
		</div>
</footer>

<?php wp_footer(); 
/* Espace où Wordpress peut insérer de fichiers .js et autres pour des plugiciels (plugins) par exemple. 
	 Si vous enlever cette fonction, vous désactiverez du même coups tous vos plugins 🤷. 
	 Vous pouvez toujorus la déplacer, mais garder là */
?>

</body>
</html>
