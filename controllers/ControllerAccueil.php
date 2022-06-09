<?php
class ControllerAccueil{
    public function __construct($url){
        $view = new View('PageAccueil');
        $produit = new Produit();
        $promos = $produit->getProduitsPromo();
        $view->generate(array("promos" => $promos));
    }
}