<?php
class ControllerGestioncommandes{
    public function __construct($url){
        $commande = new Commande();
        $compte = new Compte();
        $produitCommande = new ProduitCommande();
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $commande->setStatut($url[1],$_POST);
            $commandes = $commande->getCommandes();
            $view = new View("listeCommandes");
            $view->generate(array("commandes" => $commandes));
        }else{
            if(count($url) == 3){
                $produits = $produitCommande->getProduits($url[1]);
                $client = $compte->getUserById($url[2]);
                $view = new View("detailCommande");
                $view->generate(array("produits" => $produits, "profil" => $client));
            }else{
                $commandes = $commande->getCommandes();
                $view = new View("listeCommandes");
                $view->generate(array("commandes" => $commandes));
            }
        }
    }
}