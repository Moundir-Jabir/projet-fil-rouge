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
}