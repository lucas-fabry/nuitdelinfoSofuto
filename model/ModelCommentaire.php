<?php
require_once File::build_path(array('model', 'Model.php'));

class ModelCommentaire extends Model {
    
    protected static $object = "Commentaire";
    protected static $primary = 'idCommentaire';
        
    private $idCommentaire;
    private $texteCommentaire;
    private $dateCommentaire;
    private $loginCompte;
    private $idTopic;
    
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
            $sql = "SELECT * from Commentaire WHERE idTopic=:it";
            // Préparation de la requête
            $req_prep = Model::$pdo->prepare($sql);

            $values = array(
                "it" => $idTopic,
                //nomdutag => valeur, ...
            );
            // On donne les valeurs et on exécute la requête     
            $req_prep->execute($values);

            // On récupère les résultats comme précédemment
            $req_prep->setFetchMode(PDO::FETCH_CLASS, "ModelCommentaire");
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

    public static function selectAllByLogin($login) {
        try {
            $sql = "SELECT * from Commentaire WHERE loginCompte=:l";
            // Préparation de la requête
            $req_prep = Model::$pdo->prepare($sql);

            $values = array(
                "l" => $login,
                //nomdutag => valeur, ...
            );
            // On donne les valeurs et on exécute la requête     
            $req_prep->execute($values);

            // On récupère les résultats comme précédemment
            $req_prep->setFetchMode(PDO::FETCH_CLASS, "ModelCommentaire");
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
}