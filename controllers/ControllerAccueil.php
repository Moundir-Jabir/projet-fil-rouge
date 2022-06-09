<?php
class ControllerAccueil{
    public function __construct($url){
        $view = new View('PageAccueil');
        $view->generate(array());
    }
}