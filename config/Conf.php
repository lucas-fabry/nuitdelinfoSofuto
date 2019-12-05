<?php
class Conf {
   
    static private $databases = array(
        
        // ou localhost sur votre machine
        'hostname' => 'webinfo.iutmontp.univ-montp2.fr',
        //nom de la BDD
        'database' => 'fabryl',
        // id pour se co à la bdd
        'login' => 'fabryl',
        // mdp BDD, c'est chaud de le mettre en public
        'password' => 'IHaveBigSchlong'
    );

    // la variable debug est un boolean
    static private $debug = true;

    static public function getDebug() {
        return self::$debug;
    }

    static public function getHostName() {
        return self::$databases['hostname'];
    }

    static public function getDatabase() {
        return self::$databases['database'];
    }

    static public function getLogin() {
      //en PHP l'indice d'un tableau n'est pas forcement un chiffre.
        return self::$databases['login'];
    }

    static public function getPassword() {
        return self::$databases['password'];
    }
   
}
?>