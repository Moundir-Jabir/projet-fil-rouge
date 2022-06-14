<?php
class ControllerProfil{
    public function __construct($url){
        redirection_login();
        $view = new View("profil");
        $view->generate(array());
    }
}