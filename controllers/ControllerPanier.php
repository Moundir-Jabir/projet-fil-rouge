<?php
class ControllerPanier{
    public function __construct($url){
        $view = new View('panier');
        $product = new Produit();
        $commande = new Commande();
        $produitCommande = new ProduitCommande();
        $produits = $product->getProduits();
        if(count($url) == 2){
            if(is_authenticate()){
                foreach ($_SESSION['panier'] as $key => $value) {
                    foreach ($produits as $produit) {
                        if($key == $produit->idProduit){
                            if($value->nombre > $produit->quantiteStock){
                                $view->generate(array("message" => "Quantité indispensable pour le produit : $produit->nomProduit (reste: $produit->quantiteStock)"));
                                die();
                            }else{
                                $_SESSION['panier'][$key]->nouveauStock = $produit->quantiteStock - $value->nombre;
                            }
                        }
                    }
                }
                // diminuer le stock
                foreach ($_SESSION['panier'] as $key => $value) {
                    $product->updateProduit(array("quantiteStock" => $value->nouveauStock), $key);
                }
                // calcul total
                $total = 0;
                foreach ($_SESSION['panier'] as $key => $value) {
                    $total += $value->nombre * $value->prixProduit;
                }
                // creation de la commande
                $idCommande = $commande->addCommande([$_SESSION['user']->idCompte, $total]);
                // ajout des produits commandés
                foreach ($_SESSION['panier'] as $key => $value) {
                    $produitCommande->addProduit([$key, $idCommande, $value->nombre]);
                }
                $_SESSION['panier'] = array();
                header("Location: ".URL);
            }else{
                header("Location: ".URL."login");
            }
        }else{
            $view->generate(array("message" => ""));
        }
    }
}