<?php
class Compte extends Model{
    public function addCompte($valeurs){
        return $this->add('compte',['nomClient','emailClient','telephone','villeCompte','adresseCompte','password','imageProfil'], $valeurs);
    }

    public function getUserByEmailAndPassword($username, $password){
        $db = self::getBdd();
        if($db == null){
            return;
        }
        $sql = "SELECT * FROM compte WHERE emailClient = :username && password = :password";
        $smt = $db->prepare($sql);
        $smt->execute([
            ":username" => $username,
            ":password" => $password
        ]);
        $data = $smt->fetch(PDO::FETCH_OBJ);
        $smt = null;
        $db = null;
        return $data;
    }

    public function getUserById($id){
        return $this->getById('compte','idCompte',$id);
    }
}