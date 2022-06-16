<?php
class ControllerDashboard{
    public function __construct($url){
        redirection_accueil();
        $view = new View('dashboard');
        $commande = new Commande();
        $produit = new Produit();
        $compte = new Compte();
        $nbrProduit = $produit->produitsRupture();
        $nbrClient = $compte->nbrClient();
        $nbrCommande = $commande->nouvellesCommandes();
        $view->generate(array("nbrCommande" => $nbrCommande, "nbrProduit" => $nbrProduit, "nbrClient" => $nbrClient));
    }
}