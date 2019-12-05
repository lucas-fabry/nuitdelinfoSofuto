<?php
require_once File::build_path(array('model', 'Model.php'));

class ModelCompte extends Model {
    
    protected static $object = "compte";
    protected static $primary = 'login';
        
    private $login;
    private $mail;
    
    public function get($nom_attribut) {
        return $this->$nom_attribut;
    }
    
    public function set($nom_attribut, $valeur) {
        $this->$nom_attribut = $valeur;
    }
    
    public function __construct($data = NULL) {
        foreach ((array)$data as $cle => $value) {
            $this->set($cle, $value);
        }
    }
    
    public static function validateMDP($login,$mot_de_passe_chiffre) {
        try {
            $sql = "SELECT * from Compte WHERE login = :login AND mdp = :mdp";
            $req_prep = Model::$pdo->prepare($sql);

            $values = array(
                "login" => $login,
                "mdp" => $mot_de_passe_chiffre,
            );
 
            $req_prep->execute($values);

            $req_prep->setFetchMode(PDO::FETCH_CLASS, "ModelCompte");
            $tab = $req_prep->fetchAll();
            return !empty($tab);
        }
        catch(PDOException $e) {
            if (Conf::getDebug()) {
                echo $e->getMessage();
            } else {
                echo 'Une erreur est survenue <a href="index.php?action=readAll"> retour a la page d\'accueil </a>';
            }
            die();
        }
    }
    
    public static function isAdmin($login) {
        try {
            $sql = "SELECT * from Compte WHERE login = :login AND admin = TRUE";
            $req_prep = Model::$pdo->prepare($sql);

            $values = array(
                "login" => $login,
            );
 
            $req_prep->execute($values);

            $req_prep->setFetchMode(PDO::FETCH_CLASS, "ModelCompte");
            $tab = $req_prep->fetchAll();
            return !empty($tab);
        }
        catch(PDOException $e) {
            if (Conf::getDebug()) {
                echo $e->getMessage();
            } else {
                echo 'Une erreur est survenue <a href="index.php?action=readAll"> retour a la page d\'accueil </a>';
            }
            die();
        }
    }
    
    public static function nonceEmpty($login) {
        try {
            $sql = "SELECT * from Compte WHERE login = :login AND nonce = ''";
            $req_prep = Model::$pdo->prepare($sql);

            $values = array(
                "login" => $login,
            );
 
            $req_prep->execute($values);

            $req_prep->setFetchMode(PDO::FETCH_CLASS, "ModelCompte");
            $tab = $req_prep->fetchAll();
            return !empty($tab);
        }
        catch(PDOException $e) {
            if (Conf::getDebug()) {
                echo $e->getMessage();
            } else {
                echo 'Une erreur est survenue <a href="index.php?action=readAll"> retour a la page d\'accueil </a>';
            }
            die();
        }
    }
    
    public static function validateNonce($login, $nonce) {
        try {
            $sql = "SELECT * from Compte WHERE login = :login AND nonce = :nonce";
            $req_prep = Model::$pdo->prepare($sql);

            $values = array(
                "login" => $login,
                "nonce" => $nonce,
            );
 
            $req_prep->execute($values);

            $req_prep->setFetchMode(PDO::FETCH_CLASS, "ModelCompte");
            $tab = $req_prep->fetchAll();
            return !empty($tab);
        }
        catch(PDOException $e) {
            if (Conf::getDebug()) {
                echo $e->getMessage();
            } else {
                echo 'Une erreur est survenue <a href="index.php?action=readAll"> retour a la page d\'accueil </a>';
            }
            die();
        }
    }

    public static function changeAdmin($login, $estadmin){
        try {
            if(!Session::is_admin()){
                return false;
            }

            if($estadmin){
                $sql = "UPDATE Compte " . "SET ";
                $sql = $sql."admin = false";
                $sql = $sql." WHERE login =:login";
            }
            else{
                $sql = "UPDATE Compte " . "SET ";
                $sql = $sql."admin = true";
                $sql = $sql." WHERE login =:login";
            }



            $values = array(
                "login" => $login,
            );

            $rep_prep = Model::$pdo->prepare($sql);
            $rep_prep->execute($values);

            return true;
        } catch (PDOException $e) {
            if (Conf::getDebug()) {
                echo $e->getMessage(); // affiche un message d'erreur
            }
            return false;
        }
    }
}