<?php
class ControllerProfil{
    public function __construct($url){
        redirection_login();
        $compte = new Compte();
        $commande = new Commande();
        $produitCommande = new ProduitCommande();
        if(count($url) == 2){
            $produits = $produitCommande->getProduits($url[1]);
            $view = new View("produitcommande");
            $view->generate(array("produits" => $produits));
        }else{
            $view = new View("profil");
            $commandes = $commande->getCommandeById($_SESSION['user']->idCompte);
            $data = $compte->getUserById($_SESSION['user']->idCompte);
            $view->generate(array("profil" => $data, "commandes" => $commandes));
        }
    }
}