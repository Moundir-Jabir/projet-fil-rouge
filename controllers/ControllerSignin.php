<?php
class ControllerSignin{
    public function __construct($url){
        redirection_admin();
        $compte = new Compte();
        $view = new View('signin');
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $_POST['password'] = hash("md5", $_POST['password']);
            $_POST['image'] = uploadFile();
            if($compte->addCompte(array_values($_POST)) == 'bien'){
                $user = new stdClass();
                foreach ($_POST as $key => $value) {
                    $user->$key = $value;
                }
                $_SESSION['user'] = $user;
                header("Location: ".URL);
            }else{
                $view->generate(array("status" => "email déja utilisé"));
            }
        }else{
            $view->generate(array("status" => ""));
        }
    }
}