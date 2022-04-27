<?php
require "../View/header.php";
?>

<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../View/index/store.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <title>ALL4SPORT | Article de sport</title>
    <script src="https://kit.fontawesome.com/3ead8a56ce.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <a href="#" class="logo">ALL4SPORT</a>
        <ul>
            <li><a href="../Controller/index.php">Accueil</a></li>
            <li><a href="#">Nouveautés</a></li>
            <li><a href="#">Nos meilleures ventes</a></li>
            <li><a href="#">Produits du jour</a></li>
            <li><a href="#">Suivi sportif</a></li>
            <li><a href="#">Votre compte</a></li>
        </ul>
    </header>
    <section class=showcase>
        <img src="../View/index/img/banner.jpg"></img>
        <div class="overlay"></div>
        <div class="text">
            <h2>ALL4SPORT</h2>
            <h3>IL EST TEMPS POUR VOUS DE DÉBUTER VOTRE AVENTURE</h3>
        </div>
    </section>
    <div class=separation></div>
    <div class="search">
        <img src="../View/index/img/ALL4SPORT_logo_index2.png" id="img_recherche"></img>
        <input type="text" name="Search" placeholder="Chercher une référence ou un produit...">
        <button>CHERCHER</button>
        <div class="logo">
            <i class="fas fa-user"></i>
            <i class="fas fa-question"></i>
            <i class="fas fa-shopping-cart"></i>
        </div>
    </div>
    <div class="container">
        <a href="store.php?route=trie">
            <span>Trier par sport</span>
            <span>Trier par sport</span>
        </a>
        <a href="#">
            <span>Femme</span>
            <span>Femme</span>
        </a>
        <a href="#">
            <span>Enfants</span>
            <span>Enfants</span>
        </a>
        <a href="#">
            <span>Produits partenaires</span>
            <span>Produits partenaires</span>
        </a>
        <a href="#">
            <span>Bons Plans</span>
            <span>Bons Plans</span>
        </a>
    </div>
    <script type="text/javascript">
        window.addEventListener("scroll", function() {
            var header = document.querySelector("header");
            header.classList.toggle("sticky", window.scrollY > 0);
        })
    </script>
    <div class="lesarticles" style="text-align: center">
<?php foreach($produits as $produit) {
    if ($produit["nom_produit"] != ""){  ?>
    <div class="card bg-light mb-3" style="text-align: center; float: left; width: 18rem;">
  <img src="<?php echo $produit['PATH']; ?>" style="width:120px; height:120px; margin-left: 25%" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $produit['nom_produit']; ?></h5>
    <p class="card-text"><?php echo $produit['description']; ?></p>
    <p><?php echo $produit['cout_unitaire'] ?> €</p>
    <a href="article.php?route=<?php echo $produit['reference'] ?>" class="btn btn-primary" style="background-color: orange; border: solid orange">Voir</a> <br/>
  </div>
</div>
    </div>
<?php } } ?>
</body>
<?php
require "../View/footer.php";
?>

</html>