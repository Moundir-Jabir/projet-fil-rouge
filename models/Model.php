<?php
abstract class Model{

    protected static function getBdd(){
        return new PDO('mysql:dbname=fil-rouge;host=localhost;port=3306','root','');
    }

    protected function getAll($table){
        $db = self::getBdd();
        $query = $db->query('SELECT * FROM ' .$table);
        $data = $query->fetchAll(PDO::FETCH_OBJ);
        $query = null;
        $db = null;
        return $data;
    }

    protected function getById($table, $matricule, $id){
        $db = self::getBdd();
        $query = $db->query("SELECT * FROM $table WHERE $matricule = $id");
        $data = $query->fetch(PDO::FETCH_OBJ);
        $query = null;
        $db = null;
        return $data;
    }
   

    protected function add($table, $attributs, $valeurs){
        $db = self::getBdd();
        if($db == null){
            return;
        }
        $valeurs = array_map(function ($valeur){
            return "'".$valeur."'";
        },$valeurs);
        $attributs = implode(',', $attributs);
        $valeurs = implode(',', $valeurs);
        $sql = "INSERT INTO ".$table. '('. $attributs .')'. 'VALUES'. '('. $valeurs .')';
        $smt = $db->prepare($sql);
        try
        {
            $smt->execute();
            return "bien";
        }catch(Exception $e){
            return $e;
        }
        $smt = null;
        $db = null;
    }

    protected function addOne($table, $attributs, $valeurs){
        $db = self::getBdd();
        if($db == null){
            return;
        }
        $valeurs = array_map(function ($valeur){
            return "'".$valeur."'";
        },$valeurs);
        $attributs = implode(',', $attributs);
        $valeurs = implode(',', $valeurs);
        $sql = "INSERT INTO ".$table. '('. $attributs .')'. 'VALUES'. '('. $valeurs .')';
        $smt = $db->prepare($sql);
        $smt->execute();
        $smt = null;
        $db = null;
    }

    protected function addId($table, $attributs, $valeurs){
        $db = self::getBdd();
        if($db == null){
            return;
        }
        $valeurs = array_map(function ($valeur){
            return "'".$valeur."'";
        },$valeurs);
        $attributs = implode(',', $attributs);
        $valeurs = implode(',', $valeurs);
        $sql = "INSERT INTO ".$table. '('. $attributs .')'. 'VALUES'. '('. $valeurs .')';
        $smt = $db->prepare($sql);
        $smt->execute();
        $id = $db->lastInsertId();
        $smt = null;
        $db = null;
        return $id;
    }

    protected function update($table, $tableau, $matricule, $id){
        $db = self::getBdd();
        if($db == null){
            return;
        }
        $attributs = "";
        foreach ($tableau as $key => $value) {
            $attributs = $attributs.$key."="."'".$value."',";
        }
        $attributs = substr($attributs, 0, -1); 
        $sql = "UPDATE ".$table. " SET ".$attributs." WHERE ".$matricule." = ".$id;
        $smt = $db->prepare($sql);
        $smt->execute();
        $smt = null;
        $db = null;
    }

    protected function delete($table, $matricule){
        $db = self::getBdd();
        if($db == null){
            return;
        }
        $sql = "UPDATE ".$table. " SET status = 0 WHERE matricule = :matricule";
        $smt = $db->prepare($sql);
        $smt->execute([
            ":matricule" => $matricule
        ]);
        $smt = null;
        $db = null;
    }
}