<?php 

Class Bdd {
    
    private $bdd ;

    function __construct() {

        try {

            $this->bdd = new PDO("mysql:dbname=all4sport_web;host=localhost","root", "toor");
            

        } catch (PDOException $e){

            echo $e->getMessage();

        }

    }

    function getAllProduit() {
        $sql = "SELECT reference, nom_produit, description, cout_unitaire, PATH
        FROM image_produit
            join produit on reference = fk_produit
            WHERE nom_produit != 'NULL'";
        $sth = $this->bdd->prepare($sql);
        $sth->execute();
        return $sth->fetchAll();
    }

    function getAllProduitByRayon() {
        $sql = "SELECT * FROM `produit` JOIN rayon on id_rayon = fk_rayon JOIN image_produit ON reference = fk_produit ORDER BY id_rayon";
        $sth = $this->bdd->prepare($sql);
        $sth->execute();
        return $sth->fetchAll();
    }

    function getProduitByRef($ref) {
        $sql = "SELECT reference, nom_produit, description, cout_unitaire, PATH 
                FROM produit
                    join image_produit on reference = fk_produit
                WHERE reference = :ref";
        $sth = $this->bdd->prepare($sql);
        $sth->execute([':ref' => $ref]);
        return $sth->fetchAll();
    }
}

?>
