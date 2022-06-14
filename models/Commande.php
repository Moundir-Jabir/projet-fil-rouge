<?php
class Commande extends Model{
    public function addCommande($valeurs){
        return $this->addId('commande',['idClient','total'], $valeurs);
    }

    public function getCommandeById($id){
        $db = self::getBdd();
        if($db == null){
            return;
        }
        $sql = "SELECT * FROM commande WHERE idClient = $id";
        $smt = $db->prepare($sql);
        $smt->execute();
        $data = $smt->fetchAll(PDO::FETCH_OBJ);
        $smt = null;
        $db = null;
        return $data;
    }
}