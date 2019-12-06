<?php
require_once File::build_path(array('model', 'ModelTopic.php'));
require_once File::build_path(array('model', 'ModelCommentaire.php'));

class ControllerTopic {
    
    protected static $object = "topic";
    
    public static function readAll() {
        $tab_t = ModelTopic::selectAll();     //appel au modèle pour gerer la BD
        $tab_tab_com = array();
        foreach ($tab_t as $key => $t) {
            $tab_tab_com[$t->get('idTopic')] = ModelCommentaire::selectAllByIdTopic($t->get('idTopic'));
        }
        $view = 'list';
        $pagetitle = 'Liste des topics';
        require File::build_path(array('view', 'view.php'));  //"redirige" vers la view
    }
    
    public static function read() {
        $idTopic = myGet("idTopic");
        $t = ModelTopic::select($idTopic);
        if ($t == false) {
            $view = 'error';
            $pagetitle = 'Erreur de lecture';
            require File::build_path(array('view', 'view.php'));
        }
        else {
            $view = 'detail';
            $pagetitle = 'Detail du Topic';
            require File::build_path(array('view', 'view.php'));
        }
    }
    
    public static function update() {
        $idTopic = myGet("idTopic");
        $t = ModelTopic::select($idTopic);
        if (Session::is_user($t->get('loginCompte'))) {
            $creer = "Modification";
            $actionModif = "update";
            $view = 'update';
            $pagetitle = 'Mise a jour du topic';
            require File::build_path(array('view', 'view.php'));
        }
        else {
            $tab_t = ModelTopic::selectAll();
            $view = 'detail';
            $pagetitle = 'Connexion requise';
            require File::build_path(array('view', 'view.php'));
        }
    }
    
    public static function updated() {
        $data = array(
            'idTopic' => myGet('idTopic'),
            'nomTopic' => myGet('nomTopic'),
            'texteTopic' => myGet('texteTopic'),
        );
        $t = ModelTopic::select($data['idTopic']);
        if ($t==false) {
            $view = 'error';
            $pagetitle = 'Erreur de lecture';
            require File::build_path(array('view', 'view.php'));
            return;
        }
        $loginCompte = $t->get('loginCompte');

        if (Session::is_user($loginCompte)) {
            $data['dateTopic'] = date("Y-m-d H:i:s");
            $isGood = ModelTopic::update($data);
            if ($isGood == false) {
                $idTopic = $data['idTopic'];
                $view = 'error';
                $pagetitle = 'Erreur de mise a jour de topic';
                require File::build_path(array('view', 'view.php'));
            }
            else {
                $tab_t = ModelTopic::selectAll();
                $view = 'updated';
                $pagetitle = 'Topic updated';
                require File::build_path(array('view', 'view.php'));
            }
        }
        else {
            $idTopic = $data['idTopic'];
            $tab_t = ModelTopic::selectAll();
            $view = 'list';
            $pagetitle = 'Connexion requise';
            require File::build_path(array('view', 'view.php'));
        }
    }
    
    public static function create() {
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
    }
    
    public static function created() {
        if (isset($_SESSION['login'])) {
            if(!(preg_match('@[0-9]{0,32}@', myGet('idTopic')))){
                $t = new ModelTopic(array ("idTopic" => myGet('idTopic'), "nomTopic" => myGet('nomTopic'), "texteTopic" => myGet('texteTopic')));
                $creer = "Créer un topic";
                $actionModif = "create";
                $view = 'update';
                $pagetitle = 'idTopic non valide';
                require File::build_path(array('view', 'view.php'));
            }
            elseif(!(preg_match('@.{1,32}@', myGet('nomTopic')))){
                $t = new ModelTopic(array ("idTopic" => myGet('idTopic'), "nomTopic" => myGet('nomTopic'), "texteTopic" => myGet('texteTopic')));
                $creer = "Créer un topic";
                $actionModif = "create";
                $view = 'update';
                $pagetitle = 'nomTopic non valide';
                require File::build_path(array('view', 'view.php'));
            }
            elseif (myGet('texteTopic') == "03/05/1968") {
                $view = "cassetete";
                $pagetitle = "Clé";
                $object = "Secret";
                require File::build_path(array('view', 'view.php'));
            }
            elseif(!(preg_match('@.{1,65535}@', myGet('texteTopic')))){
                $t = new ModelTopic(array ("idTopic" => myGet('idTopic'), "nomTopic" => myGet('nomTopic'), "texteTopic" => myGet('texteTopic')));
                $creer = "Créer un topic";
                $actionModif = "create";
                $view = 'update';
                $pagetitle = 'texteTopic non valide';
                require File::build_path(array('view', 'view.php'));
            }
            else{
                $data = array(
                    'idTopic' => myGet('idTopic'),
                    "nomTopic" => myGet('nomTopic'),
                    "texteTopic" => myGet('texteTopic'),
                );
                $data['dateTopic'] = date("Y-m-d H:i:s");
                $data['loginCompte'] = $_SESSION['login'];
                
                $isGood = ModelTopic::create($data);
                if ($isGood == false) {
                    $view = 'error';
                    $pagetitle = 'Erreur de creation de topic';
                    require File::build_path(array('view', 'view.php'));
                }
                else {
                    $tab_t = ModelTopic::selectAll();
                    $view = 'created';
                    $pagetitle = 'Topic created';
                    require File::build_path(array('view', 'view.php'));
                }
            }
        }
        else {
            $tab_t = ModelTopic::selectAll();
            $view = 'list';
            $pagetitle = 'Connexion requise';
            require File::build_path(array('view', 'view.php'));
        }
    }
    
    public static function delete() {
        $idTopic = myGet('idTopic');
        $t = ModelTopic::select($idTopic);
        if (Session::is_user($t->get('loginCompte'))) {
            $isGood = ModelTopic::delete($idTopic);
            if ($isGood == false) {
                $view = 'error';
                $pagetitle = 'Erreur de suppression de Topic';
                require File::build_path(array('view', 'view.php'));
            }
            else {
                $tab_t = ModelTopic::selectAll();
                $view = 'delete';
                $pagetitle = 'Topic supprime';
                require File::build_path(array('view', 'view.php'));
            }
        }
        else {
            $tab_t = ModelTopic::selectAll();
            $view = 'list';
            $pagetitle = 'Connexion requise';
            require File::build_path(array('view', 'view.php'));
        }
    }
}