<?php
class Commande extends Model{
    public function addCommande($valeurs){
        return $this->addId('commande',['idClient','total'], $valeurs);
    }
}