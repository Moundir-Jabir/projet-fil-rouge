<?php
class ControllerProduits{
    public function __construct($url){
        $view = new View('produits');
        $produit = new Produit();
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            if(count($url) == 2){
                $produits = $produit->getProduitsByPriceAndCategorie($url[1], $_POST['min'], $_POST['max']);
                $view->generate(array("produits" => $produits, "categorie" => " - ".$url[1]));
            }else{
                $produits = $produit->getProduitsByPrice($_POST['min'], $_POST['max']);
                $view->generate(array("produits" => $produits, "categorie" => ""));
            }
        }else{
            if(count($url) == 2){
                $produits = $produit->getProduitsByCategorie($url[1]);
                $view->generate(array("produits" => $produits, "categorie" => " - ".$url[1]));
            }else{
                $produits = $produit->getProduits();
                $view->generate(array("produits" => $produits, "categorie" => ""));
            }
        }
    }
}