<?php

require_once "../Model/Bdd.php";

$bdd = new Bdd;
if (isset($_GET['route'])) {
    $produitSel = $bdd->getProduitByRef($_GET['route']);
    require "../View/index/article_view.php";
}else {
echo "erreur";

require "../View/index/article_view.php";
}
?>