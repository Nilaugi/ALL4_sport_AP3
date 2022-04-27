<?php
require "../View/header.php";
?>

<section class="showcase">
    <header>
      <img src="../View/index/img/ALL4SPORT_logo_index.png" width = 200px>
      <div class="toggle"></div>
    </header>
    <video src="../View/index/img/cover_video.mp4" muted loop autoplay></video>
    <div class="overlay"></div>
    <div class="text">
      <h2>ALL4SPORT</h2> 
      <h3>Une nouvelle manière de faire du sport</h3>
      <p>Que vous soyez un débutant ou expert, un adepte des séances en salle de ou du Yoga à la maison , peu importe.
        Qui que vous soyez et quel que soit votre mode d'entraînement, ALL4SPORT est là pour vous !</p>
      <a href="store.php">DÉCOUVRIR NOS PRODUITS</a>
    </div>
    <ul class="social">
      <li><a href="#"><img src="https://i.ibb.co/x7P24fL/facebook.png"></a></li>
      <li><a href="#"><img src="https://i.ibb.co/Wnxq2Nq/twitter.png"></a></li>
      <li><a href="#"><img src="https://i.ibb.co/ySwtH4B/instagram.png"></a></li>
    </ul>
  </section>
  <div class="menu">
    <ul>
      <li><a href="#">ACCEUIL</a></li>
      <li><a href="../Controller/store.php">PRODUITS</a></li>
      <li><a href="#">A PROPOS DE NOUS</a></li>
      <li><a href="#">COMPTE</a></li>
    </ul>
</div>
<script>
  const menuToggle = document.querySelector('.toggle');
      const showcase = document.querySelector('.showcase');

      menuToggle.addEventListener('click', () => {
        menuToggle.classList.toggle('active');
        showcase.classList.toggle('active');
      })
</script>