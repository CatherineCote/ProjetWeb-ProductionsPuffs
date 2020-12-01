<?php
	/*-----------------------------------------------------------------------------------*/
	/* Affiche le pied de page (Footer) sur toutes vos pages
	/*-----------------------------------------------------------------------------------*/
?>

</main><!-- Fermeture de la zone de contenu principale -->

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
