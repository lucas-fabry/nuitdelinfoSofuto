<?php
require_once File::build_path(array('model', 'ModelScore.php'));

class ControllerScore {
    
    protected static $object = "score";
    
    public static function readAll() {
        $tab_t = ModelScore::selectAll();     //appel au modèle pour gerer la BD
        $view = 'jeu';
        $pagetitle = 'jeu';
        require File::build_path(array('view', 'view.php'));  //"redirige" vers la view
    }
    
   /** public static function create() {
        if (isset($_SESSION['login'])) {
            $t = new ModelTopic(array ("idTopic" => null, "nomTopic" => null, "texteTopic" => null));
            $creer = 'Créer un topic';
            $actionModif = "create";
            $view = 'update';
            $pagetitle = 'Creation de Topic';
            require File::build_path(array('view', 'view.php'));
        }
        else {
            $tab_t = ModelTopic::selectAll();
            $view = 'list';
            $pagetitle = 'Connexion requise';
            require File::build_path(array('view', 'view.php'));
        }
    }**/
}