<?php
require_once File::build_path(array('config', 'Conf.php'));

class Model {
    
    public static $pdo;
    
    public static function Initialiser() {
        $hostname = Conf::getHostName();
        $database_name = Conf::getDatabase();
        $login = Conf::getLogin();
        $password = Conf::getPassword();
        
        try {
            // Connexion à la base de données            
            // Le dernier argument sert à ce que toutes les chaines de caractères 
            // en entrée et sortie de MySql soit dans le codage UTF-8
            self::$pdo = new PDO("mysql:host=$hostname;dbname=$database_name", $login, $password,
                                 array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

            // On active le mode d'affichage des erreurs, et le lancement d'exception en cas d'erreur
            self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch(PDOException $e) {
            if (Conf::getDebug()) {
                echo $e->getMessage(); // affiche un message d'erreur
            } else {
                echo 'Une erreur est survenue <a href=""> retour a la page d\'accueil </a>';
            }
            die();
        }
    }
    
    public static function selectAll() {
        $table_name = static::$object;
        $class_name = "Model".ucfirst($table_name);
        try {
            $rep = Model::$pdo->query("SELECT * FROM $table_name");

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
    
    public static function select($primary_value) {
        $table_name = static::$object;
        $class_name = "Model".ucfirst($table_name);
        $primary_key = static::$primary;
        try {
            $sql = "SELECT * from $table_name WHERE $primary_key=:pv";
            // Préparation de la requête
            $req_prep = Model::$pdo->prepare($sql);

            $values = array(
                "pv" => $primary_value,
                //nomdutag => valeur, ...
            );
            // On donne les valeurs et on exécute la requête	 
            $req_prep->execute($values);

            // On récupère les résultats comme précédemment
            $req_prep->setFetchMode(PDO::FETCH_CLASS, $class_name);
            $tab = $req_prep->fetchAll();
            // Attention, si il n'y a pas de résultats, on renvoie false
            if (empty($tab))
                return false;
            return $tab[0];
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
    
    public static function delete($primary_value) {
        $table_name = static::$object;
        $primary_key = static::$primary;
        try {
            $sql = "DELETE from $table_name "
                    . "WHERE $primary_key=:pv";
            $rep_prep = Model::$pdo->prepare($sql);
            
            $values = array(
                "pv" => $primary_value,
            );
            
            $rep_prep->execute($values);
            return true;
        }
        catch(PDOException $e) {
            if (Conf::getDebug()) {
                echo $e->getMessage(); // affiche un message d'erreur
            }
            return false;
        }
    }
    
    public static function update($data) {
        $table_name = static::$object;
        $primary_key = static::$primary;
        try {
            $sql = "UPDATE $table_name "
                    . "SET ";
            
            foreach ($data as $name => $value) {
                $sql = $sql."$name = :$name";
                if ($name != array_key_last($data)) {
                    $sql = $sql.", ";
                }
            }
            
            $sql = $sql." WHERE $table_name.$primary_key = :$primary_key";
            $rep_prep = Model::$pdo->prepare($sql);
            
            $rep_prep->execute($data);
            return true;
        } catch (PDOException $e) {
            if (Conf::getDebug()) {
                echo $e->getMessage(); // affiche un message d'erreur
            }
            return false;
        }
    }
    
    public static function create($data) {
        $table_name = static::$object;
        $primary_key = static::$primary;
        try {
            $sql = "INSERT INTO $table_name (";
            foreach ($data as $name => $value) {
                $sql = $sql."$name";
                if ($name != array_key_last($data)) {
                    $sql = $sql.", ";
                }
            }
            $sql = $sql. ") VALUES (";
            foreach ($data as $name => $value) {
                $sql = $sql.":$name";
                if ($name != array_key_last($data)) {
                    $sql = $sql.", ";
                }
            }
            $sql = $sql.")";
            $rep_prep = Model::$pdo->prepare($sql);
            
            $rep_prep->execute($data);
            return true;
        }
        catch(PDOException $e) {
            if (Conf::getDebug()) {
                echo $e->getMessage(); // affiche un message d'erreur
            }
            return false;
        }
    }
}

Model::Initialiser();
?>