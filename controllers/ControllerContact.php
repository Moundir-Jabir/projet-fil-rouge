<?php
class ControllerContact{
    public function __construct($url){
        $view = new View('contact');
        $view->generate(array());
    }
}