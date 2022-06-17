<?php
class ControllerPropos{
    public function __construct($url){
        $view = new View('propos');
        $view->generate(array());
    }
}