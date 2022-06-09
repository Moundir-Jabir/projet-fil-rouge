<?php
class ControllerGestionstock{
    public function __construct($url){
        redirection_accueil();
        $produit = new Produit();
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            if(count($url) == 2){
                $produit->updateProduit($_POST, $url[1]);
                header('Location: '.URL."gestionstock");
            }else{
                $cles = ['nomProduit','prixProduit','quantiteStock','descriptionProduit','couleur','categorie'];
                if($_POST['categorie'] == "mac"){
                    $cles = [...$cles, "pouces","puce","stockage","memoire"];
                }elseif($_POST['categorie'] == "iphone" || $_POST['categorie'] == "ipad"){
                    $cles = [...$cles, "pouces","puce","stockage","memoire","camera"];
                }elseif($_POST['categorie'] == "accessoires"){
                    $cles = [...$cles, "accessoireCategorie"];
                }
                if(isset($_POST['touchbar'])){
                    $_POST['touchbar'] = 1;
                    $cles = [...$cles, "touchBar"];
                }
                if(isset($_POST['touchid'])){
                    $_POST['touchid'] = 1;
                    $cles = [...$cles, "touchId"];
                }
                if(isset($_POST['faceid'])){
                    $_POST['faceid'] = 1;
                    $cles = [...$cles, "faceId"];
                }
                $_POST['image'] = uploadFile();
                $cles = [...$cles, "imageProduit"];
                $produit->addProduit($cles, array_values($_POST));
                }
            }
            $produits = $produit->getProduits();
            $view = new View("listeProduits");
            $view->generate(array("produits" => $produits));
        }
    }