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

    public function getCommandes(){
        $db = self::getBdd();
        if($db == null){
            return;
        }
        $sql = "SELECT * FROM `commande` ORDER BY dateCommande DESC";
        $smt = $db->prepare($sql);
        $smt->execute();
        $data = $smt->fetchAll(PDO::FETCH_OBJ);
        $smt = null;
        $db = null;
        return $data;
    }

    public function setStatut($id, $tableau){
        $this->update('commande',$tableau, "idCommande",$id);
    }
}