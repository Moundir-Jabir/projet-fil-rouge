<?php
class ProduitCommande extends Model{
    public function addProduit($valeurs){
        $this->addOne('produit_commande',['fProduit','fCommande','quantite'], $valeurs);
    }

    public function getProduits($id){
        $db = self::getBdd();
        if($db == null){
            return;
        }
        $sql = "SELECT * FROM produit_commande INNER JOIN produit ON produit_commande.fProduit = produit.idProduit WHERE produit_commande.fCommande = $id";
        $smt = $db->prepare($sql);
        $smt->execute();
        $data = $smt->fetchAll(PDO::FETCH_OBJ);
        $smt = null;
        $db = null;
        return $data;
    }
}