<?php
class ControllerFicheProduit{
    public function __construct($url){
        $view = new View('FicheProduit');
        $produit = new Produit();
        $data = $produit->getProduitById($url[1]);
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $objet = new stdClass();

            $today = date("Y-m-d");
            $prix = $data->prixProduit;
            if($data->finPromotion > $today){ $prix -= ($prix * $data->promotion / 100); }

            $objet->nombre = $_POST['nombre'];
            $objet->nomProduit = $data->nomProduit;
            $objet->imageProduit = $data->imageProduit;
            $objet->prixProduit = $prix;
            $_SESSION['panier'][$url[1]] = $objet;
            $view->generate(array("data" => $data, "message" => "Produit ajouter au Panier !!"));
        }else{
            $view->generate(array("data" => $data, "message" => ""));
        }
    }
}