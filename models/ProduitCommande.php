<?php
class ProduitCommande extends Model{
    public function addProduit($valeurs){
        $this->addOne('produit_commande',['fProduit','fCommande','quantite'], $valeurs);
    }
}