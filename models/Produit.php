<?php
class Produit extends Model{
    public function addProduit($cles, $valeurs){
        $this->addOne('produit',$cles, $valeurs);
    }

    public function getProduits(){
        return $this->getAll('produit');
    }

    public function getProduitById($id){
        return $this->getById("produit", "idProduit", $id);
    }

    public function updateProduit($tableau, $id){
        $this->update("produit", $tableau, "idProduit", $id);
    }

    public function getProduitsPromo(){
        $db = self::getBdd();
        if($db == null){
            return;
        }
        $sql = "SELECT * FROM `produit` WHERE finPromotion > (SELECT DATE( NOW() ))";
        $smt = $db->prepare($sql);
        $smt->execute();
        $data = $smt->fetchAll(PDO::FETCH_OBJ);
        $smt = null;
        $db = null;
        return $data;
    }

    public function getProduitsByCategorie($categorie){
        $db = self::getBdd();
        if($db == null){
            return;
        }
        $sql = "SELECT * FROM `produit` WHERE categorie = '".$categorie."'";
        $smt = $db->prepare($sql);
        $smt->execute();
        $data = $smt->fetchAll(PDO::FETCH_OBJ);
        $smt = null;
        $db = null;
        return $data;
    }

    public function getProduitsByPrice($min, $max){
        $db = self::getBdd();
        if($db == null){
            return;
        }
        $sql = "SELECT * FROM `produit` WHERE (`prixProduit` BETWEEN $min AND $max)";
        $smt = $db->prepare($sql);
        $smt->execute();
        $data = $smt->fetchAll(PDO::FETCH_OBJ);
        $smt = null;
        $db = null;
        return $data;
    }

    public function getProduitsByPriceAndCategorie($categorie, $min, $max){
        $db = self::getBdd();
        if($db == null){
            return;
        }
        $sql = "SELECT * FROM `produit` WHERE (`prixProduit` BETWEEN $min AND $max) AND (`categorie` = '$categorie')";
        $smt = $db->prepare($sql);
        $smt->execute();
        $data = $smt->fetchAll(PDO::FETCH_OBJ);
        $smt = null;
        $db = null;
        return $data;
    }
}