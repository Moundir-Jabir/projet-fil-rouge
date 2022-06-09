<?php
class ControllerProduits{
    public function __construct($url){
        $view = new View('produits');
        $view->generate(array());
    }
}