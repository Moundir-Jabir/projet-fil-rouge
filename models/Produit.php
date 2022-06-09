<?php
class Produit extends Model{
    public function addProduit($cles, $valeurs){
        $this->addOne('produit',$cles, $valeurs);
    }

    public function getProduits(){
        return $this->getAll('produit');
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
}