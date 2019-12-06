<?php
require_once File::build_path(array('model', 'ModelCommentaire.php'));
require_once File::build_path(array('model', 'ModelTopic.php'));

class ControllerCommentaire {
    
    protected static $object = "commentaire";
    
    public static function readAll() {
        if (Session::is_admin()) {
            $tab_com = ModelCommentaire::selectAll();     //appel au modèle pour gerer la BD
            $view = 'list';
            $pagetitle = 'Liste des commentaire';
            require File::build_path(array('view', 'view.php'));  //"redirige" vers la view
        }
        else {
            $view = 'error';
            $pagetitle = 'Erreur';
            require File::build_path(array('view', 'view.php'));
        }
    }
    
    public static function read() {
        $idCommentaire = myGet("idCommentaire");
        $com = ModelCommentaire::select($idCommentaire);
        if ($com == false) {
            $view = 'error';
            $pagetitle = 'Erreur de lecture';
            require File::build_path(array('view', 'view.php'));
        }
        else {
            $view = 'detail';
            $pagetitle = 'Detail du Commentaire';
            require File::build_path(array('view', 'view.php'));
        }
    }
    
    public static function update() {
        $idCommentaire = myGet("idCommentaire");
        $com = ModelCommentaire::select($idCommentaire);
        if (Session::is_user($com->get('loginCompte'))) {
            $idTopic = myGet('idTopic');
            $t = ModelTopic::select($idTopic);
            $creer = "Modification";
            $actionModif = "update";
            $view = 'update';
            $pagetitle = 'Mise a jour du commentaire';
            require File::build_path(array('view', 'view.php'));
        }
        else {
            $tab_com = ModelCommentaire::selectAll();
            $view = 'detail';
            $pagetitle = 'Connexion requise';
            require File::build_path(array('view', 'view.php'));
        }
    }
    
    public static function updated() {
        $data = array(
            'idCommentaire' => myGet('idCommentaire'),
            'texteCommentaire' => myGet('texteCommentaire'),
            'idTopic' => myGet('idTopic'),
        );
        $com = ModelCommentaire::select($data['idCommentaire']);
        if ($com==false) {
            $view = 'error';
            $pagetitle = 'Erreur de lecture';
            require File::build_path(array('view', 'view.php'));
            return;
        }
        $loginCompte = $com->get('loginCompte');

        if (Session::is_user($loginCompte)) {
            $data['dateCommentaire'] = date("Y-m-d H:i:s");
            $isGood = ModelCommentaire::update($data);
            if ($isGood == false) {
                $idCommentaire = $data['idCommentaire'];
                $view = 'error';
                $pagetitle = 'Erreur de mise a jour de commentaire';
                require File::build_path(array('view', 'view.php'));
            }
            else {
                $tab_com = ModelCommentaire::selectAll();
                $view = 'updated';
                $pagetitle = 'Commentaire updated';
                require File::build_path(array('view', 'view.php'));
            }
        }
        else {
            $idCommentaire = $data['idCommentaire'];
            $tab_com = ModelCommentaire::selectAll();
            $view = 'list';
            $pagetitle = 'Connexion requise';
            require File::build_path(array('view', 'view.php'));
        }
    }
    
    public static function create() {
        if (isset($_SESSION['login'])) {
            $idTopic = myGet('idTopic');
            $t = ModelTopic::select($idTopic);
            $com = new ModelCommentaire(array ("idCommentaire" => null, "texteCommentaire" => null, "idTopic" => null));
            $creer = 'Créer un commentaire';
            $actionModif = "create";
            $view = 'update';
            $pagetitle = 'Creation de Commentaire';
            require File::build_path(array('view', 'view.php'));
        }
        else {
            $tab_com = ModelCommentaire::selectAll();
            $view = 'list';
            $pagetitle = 'Connexion requise';
            require File::build_path(array('view', 'view.php'));
        }
    }
    
    public static function created() {
        if (isset($_SESSION['login'])) {
            if(!(preg_match('@[0-9]{0,32}@', myGet('idCommentaire')))){
                $idTopic = myGet('idTopic');
                $t = ModelTopic::select($idTopic);
                $com = new ModelCommentaire(array ("idCommentaire" => myGet('idCommentaire'), "texteCommentaire" => myGet('texteCommentaire'), "idTopic" => myGet(idTopic)));
                $creer = "Créer un commentaire";
                $actionModif = "create";
                $view = 'update';
                $pagetitle = 'idCommentaire non valide';
                require File::build_path(array('view', 'view.php'));
            }
            elseif(!(preg_match('@.{1,65535}@', myGet('texteCommentaire')))){
                $idTopic = myGet('idTopic');
                $t = ModelTopic::select($idTopic);
                $com = new ModelCommentaire(array ("idCommentaire" => myGet('idCommentaire'), "texteCommentaire" => myGet('texteCommentaire'), "idTopic" => myGet(idTopic)));
                $creer = "Créer un commentaire";
                $actionModif = "create";
                $view = 'update';
                $pagetitle = 'texteCommentaire non valide';
                require File::build_path(array('view', 'view.php'));
            }
            else{
                $data = array(
                    'idCommentaire' => myGet('idCommentaire'),
                    "texteCommentaire" => myGet('texteCommentaire'),
                    'idTopic' => myGet('idTopic'),
                );
                $data['dateCommentaire'] = date("Y-m-d H:i:s");
                $data['loginCompte'] = $_SESSION['login'];
                
                $isGood = ModelCommentaire::create($data);
                if ($isGood == false) {
                    $view = 'error';
                    $pagetitle = 'Erreur de creation de commentaire';
                    require File::build_path(array('view', 'view.php'));
                }
                else {
                    ControllerTopic::readAll();
                }
            }
        }
        else {
            ControllerTopic::readAll();
            /*$view = 'list';
            $pagetitle = 'Connexion requise';
            require File::build_path(array('view', 'view.php'));*/
        }
    }
    
    public static function delete() {
        $idCommentaire = myGet('idCommentaire');
        $com = ModelCommentaire::select($idCommentaire);
        if (Session::is_user($com->get('loginCompte'))) {
            $isGood = ModelCommentaire::delete($idCommentaire);
            if ($isGood == false) {
                $view = 'error';
                $pagetitle = 'Erreur de suppression de Commentaire';
                require File::build_path(array('view', 'view.php'));
            }
            else {
                $tab_com = ModelCommentaire::selectAll();
                $view = 'delete';
                $pagetitle = 'Commentaire supprime';
                require File::build_path(array('view', 'view.php'));
            }
        }
        else {
            $tab_com = ModelCommentaire::selectAll();
            $view = 'list';
            $pagetitle = 'Connexion requise';
            require File::build_path(array('view', 'view.php'));
        }
    }
}