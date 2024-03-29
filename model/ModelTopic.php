<?php
require_once File::build_path(array('model', 'Model.php'));

class ModelTopic extends Model {
    
    protected static $object = "Topic";
    protected static $primary = 'idTopic';
        
    private $idTopic;
    private $nomTopic;
    private $texteTopic;
    private $dateTopic;
    private $loginCompte;
    
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

    public static function selectAll(){
        $table_name = "Topic";
        $class_name = "Model".ucfirst($table_name);
        try {
            $rep = Model::$pdo->query("SELECT * FROM $table_name ORDER BY idTopic DESC");

            $rep->setFetchMode(PDO::FETCH_CLASS, $class_name);
            return $rep->fetchAll();
        }

        
        catch(PDOException $e) {
            if (Conf::getDebug()) {
                echo $e->getMessage(); // affiche un message d'erreur
            } else {
                echo 'Une erreur est survenue <a href="index.php?action=lireTout"> retour a la page d\'accueil </a>';
            }
            die();
        }
    }

    public static function selectAllByLogin($login) {
        try {
            $sql = "SELECT * from Topic WHERE loginCompte=:l";
            // Préparation de la requête
            $req_prep = Model::$pdo->prepare($sql);

            $values = array(
                "l" => $login,
                //nomdutag => valeur, ...
            );
            // On donne les valeurs et on exécute la requête     
            $req_prep->execute($values);

            // On récupère les résultats comme précédemment
            $req_prep->setFetchMode(PDO::FETCH_CLASS, "ModelTopic");
            return $req_prep->fetchAll();
        }
        catch(PDOException $e) {
            if (Conf::getDebug()) {
                echo $e->getMessage(); // affiche un message d'erreur
            } else {
                echo 'Une erreur est survenue <a href="index.php?action=lireTout"> retour a la page d\'accueil </a>';
            }
            die();
        }
    }

    public static function selectAllByIdTag($idTag) {
        try {
            $sql = "SELECT * from Topic T join Possede P on P.idTopic = T.idTopic WHERE P.idTag=:id";
            // Préparation de la requête
            $req_prep = Model::$pdo->prepare($sql);

            $values = array(
                "id" => $idTag,
                //nomdutag => valeur, ...
            );
            // On donne les valeurs et on exécute la requête     
            $req_prep->execute($values);

            // On récupère les résultats comme précédemment
            $req_prep->setFetchMode(PDO::FETCH_CLASS, "ModelTopic");
            return $req_prep->fetchAll();
        }
        catch(PDOException $e) {
            if (Conf::getDebug()) {
                echo $e->getMessage(); // affiche un message d'erreur
            } else {
                echo 'Une erreur est survenue <a href="index.php?action=lireTout"> retour a la page d\'accueil </a>';
            }
            die();
        }
    }

    public static function deleteTag($idTopic, $idTag) {
        try {
            $sql = "DELETE from Possede where idTopic=$idTopic and idTag=$idTag";
            $rep = Model::$pdo->exec($sql);  
        }
        catch(PDOException $e) {
            if (Conf::getDebug()) {
                echo $e->getMessage(); // affiche un message d'erreur
            } else {
                echo 'Une erreur est survenue <a href="index.php?action=lireTout"> retour a la page d\'accueil </a>';
            }
            die();
        }
    }
}