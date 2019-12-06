<?php
require_once File::build_path(array('model', 'ModelTag.php'));

class ControllerTag {
    
    protected static $object = "tag";
    
    public static function readAll() {
        if (Session::is_admin()) {
            $tab_tag = ModelTag::selectAll();     //appel au modèle pour gerer la BD
            $view = 'list';
            $pagetitle = 'Liste des tag';
            require File::build_path(array('view', 'view.php'));  //"redirige" vers la view
        }
        else {
            $view = 'error';
            $pagetitle = 'Erreur';
            require File::build_path(array('view', 'view.php'));
        }
    }
    
    public static function read() {
        $idTag = myGet("idTag");
        $tag = ModelTag::select($idTag);
        if ($tag == false) {
            $view = 'error';
            $pagetitle = 'Erreur de lecture';
            require File::build_path(array('view', 'view.php'));
        }
        else {
            $view = 'detail';
            $pagetitle = 'Detail du Tag';
            require File::build_path(array('view', 'view.php'));
        }
    }
    
    public static function update() {
        if (Session::is_admin()) {
            $idTag = myGet("idTag");
            $tag = ModelTag::select($idTag);
            if ($tag==false) {
                $view = 'error';
                $pagetitle = 'Erreur de lecture';
                require File::build_path(array('view', 'view.php'));
                return;
            }
            $creer = "Modification";
            $actionModif = "update";
            $view = 'update';
            $pagetitle = 'Mise a jour du tag';
            require File::build_path(array('view', 'view.php'));
        }
        else {
            $view = 'error';
            $pagetitle = 'Erreur';
            require File::build_path(array('view', 'view.php'));
        }
    }
    
    public static function updated() {
        if (Session::is_admin()) {
            $data = array(
                'idTag' => myGet('idTag'),
                'nomTag' => myGet('nomTag'),
            );

            $isGood = ModelTag::update($data);
            if ($isGood == false) {
                $idTag = $data['idTag'];
                $view = 'error';
                $pagetitle = 'Erreur de mise a jour de tag';
                require File::build_path(array('view', 'view.php'));
            }
            else {
                $tab_tag = ModelTag::selectAll();
                $view = 'updated';
                $pagetitle = 'Tag updated';
                require File::build_path(array('view', 'view.php'));
            }
        }
        else {
            $view = 'error';
            $pagetitle = 'Erreur';
            require File::build_path(array('view', 'view.php'));
        }
    }
    
    public static function create() {
        if (Session::is_admin()) {
            $tag = new ModelTag(array ("idTag" => myGet('idTag'), "nomTag" => myGet('nomTag')));
            $creer = 'Créer un tag';
            $actionModif = "create";
            $view = 'update';
            $pagetitle = 'Creation de Tag';
            require File::build_path(array('view', 'view.php'));
        }
        else {
            $view = 'error';
            $pagetitle = 'Erreur';
            require File::build_path(array('view', 'view.php'));
        }
    }
    
    public static function created() {
        if (Session::is_admin()) {
            $data = array(
                'idTag' => myGet('idTag'),
                'nomTag' => myGet('nomTag'),
            );

            $isGood = ModelTag::create($data);
            if ($isGood == false) {
                $view = 'error';
                $pagetitle = 'Erreur de creation de tag';
                require File::build_path(array('view', 'view.php'));
            }
            else {
                $tab_tag = ModelTag::selectAll();
                $view = 'created';
                $pagetitle = 'Tag created';
                require File::build_path(array('view', 'view.php'));
            }

        }
        else {
            $tab_tag = ModelTag::selectAll();
            $view = 'list';
            $pagetitle = 'Connexion requise';
            require File::build_path(array('view', 'view.php'));
        }
    }
    
    public static function delete() {
        if (Session::is_admin()) {
            $idTag = myGet('idTag');
            $isGood = ModelTag::delete($idTag);
            if ($isGood == false) {
                $view = 'error';
                $pagetitle = 'Erreur de suppression de Tag';
                require File::build_path(array('view', 'view.php'));
            }
            else {
                $tab_tag = ModelTag::selectAll();
                $view = 'delete';
                $pagetitle = 'Tag supprime';
                require File::build_path(array('view', 'view.php'));
            }
        }
        else {
            $view = 'error';
            $pagetitle = 'Erreur';
            require File::build_path(array('view', 'view.php'));
        }
    }
}