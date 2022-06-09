<?php
class ControllerLogin{
    public function __construct($url){
        redirection_admin();
        $view = new View('login');
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $email = htmlspecialchars($_POST['email']);
            $password = htmlspecialchars($_POST['password']);
            $item = new Compte();
            $data = $item->getUserByEmailAndPassword($email, hash("md5", $password));
            if(!$data){
                $view->generate(array("status" => "incorect username or password !!"));
            }else{
                if($data->typeCompte == 'client'){
                    $_SESSION['user'] = $data;
                    header("Location: ".URL);
                }else{
                    $_SESSION['admin'] = $data;
                    header("Location: ".URL."dashboard");
                }
            }
        }else{
            $view->generate(array("status" => ""));
        }
    }
}