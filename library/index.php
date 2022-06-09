<?php
    function is_authenticate(){
        return isset($_SESSION['user']);
    }

    function is_admin(){
        return isset($_SESSION['admin']);
    }

    function redirection_accueil(){
        if(!is_admin()){
            header("Location: ".URL);
            die();
        }
    }

    function redirection_login(){
        if(!is_authenticate()){
            header("Location: ".URL."login");
            die();
        }
    }

    function redirection_admin(){
        if(is_authenticate()){
            header("Location: ".URL."profil");
            die();
        }
    }

    function uploadFile(){
        $source = $_FILES['image']['tmp_name'];
        $destination = "assets/upload/" . $_FILES['image']['name'];
        move_uploaded_file($source, $destination);
        return $destination;
    }
?>