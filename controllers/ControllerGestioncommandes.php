<?php
class ControllerGestioncommandes{
    public function __construct($url){
        $view = new View("listeCommandes");
        $view->generate(array());
    }
}