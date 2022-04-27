<?php

require_once "../Model/Bdd.php";

$bdd = new Bdd;
if (isset($_GET['route']) && $_GET['route'] == 'trie') {
    $produits = $bdd->getAllProduitByRayon();
    require "../View/index/store_view.php";
}else {
$produits = $bdd->getAllProduit();

require "../View/index/store_view.php";
}
?>