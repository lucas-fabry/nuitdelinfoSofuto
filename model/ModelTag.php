<?php
require_once File::build_path(array('model', 'Model.php'));

class ModelTag extends Model {
    
    protected static $object = "Tag";
    protected static $primary = 'idTag';
        
    private $idTag;
    private $nomTag;
    
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

    public static function selectAllByIdTopic($idTopic) {
        try {
            $sql = "SELECT * from Tag T join Possede P on P.idTag = T.idTag WHERE P.idTopic=:it";
            // Préparation de la requête
            $req_prep = Model::$pdo->prepare($sql);

            $values = array(
                "it" => $idTopic,
                //nomdutag => valeur, ...
            );
            // On donne les valeurs et on exécute la requête     
            $req_prep->execute($values);

            // On récupère les résultats comme précédemment
            $req_prep->setFetchMode(PDO::FETCH_CLASS, "ModelTag");
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

    public static function selectAllByNonIdTopic($idTopic) {
        try {
            $sql = "SELECT * from Tag T where NOT EXISTS (SELECT * from Possede P WHERE P.idTopic = :it And P.idTag = T.idTag)";
            // Préparation de la requête
            $req_prep = Model::$pdo->prepare($sql);

            $values = array(
                "it" => $idTopic,
                //nomdutag => valeur, ...
            );
            // On donne les valeurs et on exécute la requête     
            $req_prep->execute($values);

            // On récupère les résultats comme précédemment
            $req_prep->setFetchMode(PDO::FETCH_CLASS, "ModelTag");
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

    public static function ajoutPosseder($idTopic, $tab_tag) {
        try {
            foreach ($tab_tag as $tag) {
                $sql = "INSERT INTO Possede (idTopic, idTag) values (".$idTopic.", ".$tag.")";
                $rep = Model::$pdo->exec($sql);  
            }
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