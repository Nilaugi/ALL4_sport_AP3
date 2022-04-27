<?php
require "../View/header.php";
?>
<?php foreach($produitSel as $produit) {
     ?>
<!doctype html>
<html lang="fr">

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js%22%3E"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../View/index/article.css">
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
<br>
<div class="separation"></div>
<div class="container">
        <div class="product">
            <div class="images">
                <div class="slider">
                    <img src="<?php echo $produit['PATH']; ?>" alt="">
                </div>
                <div class="thumbnail">
                    <div class="thumb active">
                        <img src="<?php echo $produit['PATH']; ?>" alt="">
                </div>
            </div>
            <div class="info">
            <h1><?php echo $produit['nom_produit']; ?></h1>
            <h1 class="price"><?php echo $produit['cout_unitaire'] ?> €</h1>
            <p class="card-text"><?php echo $produit['description']; ?></p>
            <h4 class="title">Magasin</h4>
            <form>
            <select id="stock">
                <?php foreach($magasins as $magasin){
                    echo "<option>".$magasin['nom_magasin']."</option>";
                }?>
            </select>
            <input type="text" readonly="readonly" id="voir_stock"/>
            </form>
            </br>
            <h4 class="title">Quantité</h4>
            <input type="text" value="1" class="qty">
            <a href="" class="cart">Ajouter au panier</a>
            </div>
        </div>
    </div>
</div>
    <script type="text/javascript">
        window.addEventListener("scroll", function() {
            var header = document.querySelector("header");
            header.classList.toggle("sticky", window.scrollY > 0);
        })
    </script>
    <script>
        const thumbs = document.querySelectorAll('.thumb');
        const slider = document.querySelector('.slider');
        
        function changeImage(){
           thumbs.forEach(thumb => thumb.classList.remove('active')); 
            this.classList.add('active');
            slider.getElementsByTagName('img')[0].src = this.getElementsByTagName('img')[0].src;
        }
        
        thumbs.forEach(thumb => thumb.addEventListener('click', changeImage));
        
    </script>
</div>
</body>
<?php } ?> 
<?php
require "../View/footer.php";
?>
</html>