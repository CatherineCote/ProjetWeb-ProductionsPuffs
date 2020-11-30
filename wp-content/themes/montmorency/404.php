<?php
/**
 * Modèle de la page 404
 */

// Appel le fichier header.php
get_header(); ?>
<style>
.wrapper{
  display:flex;
  flex-wrap:wrap;
  justify-content:center;
  align-items:center;
  width:100%;
  position:relative;
}
.erreur{
  width:30%;
  height:15vmin;
  background-color:rgba(9, 118, 165,0.5);
  font-size:5em;
  padding:20px;
  display:flex;
  flex-wrap:wrap;
  justify-content:center;
  align-items:center;
}
h2{
  width:75%;
  height:15vmin;
  background-color:black;
  opacity:0.5;
  display:flex;
  flex-wrap:wrap;
  justify-content:center;
  align-items:center;
}

p{
  width:30%;
  height:15vmin;
  background-color:black;
  opacity:0.5;
  display:flex;
  flex-wrap:wrap;
  justify-content:center;
  align-items:center;
  padding:20px;
  font-size:100%;
}
.message{
  width:30%;
  height:15vmin;
  background-color:black;
  opacity:0.5;
  display:flex;
  flex-wrap:wrap;
  justify-content:center;
  align-items:center;
  padding:20px;
}
img{
  width:50%;
  height:50vmin;
}


</style>
<article>
<div class="wrapper">
<span class="erreur"> ---404--- </span>

  <h2>Oh oh, désolé la requête demandé n'a pas été trouvée</h2>
  <p> Il semblerait que vous essayer de rejoindre une page inexistante...</p>
---
  <span class="message"> Par ici pour retourner à l'accueil du chainon - <a href="http://localhost/">Accueil Le Chainon</a></span>
	<img src="https://media1.giphy.com/media/13d2jHlSlxklVe/giphy.gif?cid=ecf05e47khppt4yl2wibrv81hfq05zb5eik0bczh4gt4dlap&rid=giphy.gif" alt="Non trouvée">
</div>
</article>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js" integrity="sha512-IQLehpLoVS4fNzl7IfH8Iowfm5+RiMGtHykgZJl9AWMgqx0AmJ6cRWcB+GaGVtIsnC4voMfm8f2vwtY+6oPjpQ==" crossorigin="anonymous"></script>
<script>
	gsap.from('.wrapper',{
  opacity:0,
  y:100,
  delay:0.5
})
gsap.from('.erreur', {
  opacity:0,
  duration:1.5,
  delay:0.9
})
</script>

<?php get_footer(); 