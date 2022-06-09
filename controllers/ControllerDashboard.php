<?php
class ControllerDashboard{
    public function __construct($url){
        redirection_accueil();
        $view = new View('dashboard');
        $view->generate(array(""));
    }
}