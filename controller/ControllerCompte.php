<?php
require_once File::build_path(array('model', 'ModelCompte.php'));
require_once File::build_path(array('lib', 'Securite.php'));
require_once File::build_path(array('lib', 'Mail.php'));

class ControllerCompte {
    
    protected static $object = "compte";
    
    public static function readAll() {
        $tab_c = ModelCompte::selectAll();     //appel au modèle pour gerer la BD
        $view = 'list';
        $pagetitle = 'Liste des comptes';
        require File::build_path(array('view', 'view.php'));  //"redirige" vers la view
    }
    
    public static function read() {
        $login = myGet("login");
        $c = ModelCompte::select($login);
        if ($c == false) {
            $view = 'error';
            $pagetitle = 'Erreur de lecture';
            require File::build_path(array('view', 'view.php'));
        }
        else {
            $view = 'detail';
            $pagetitle = 'Detail de Compte';
            $estadmin = ModelCompte::isAdmin($login);
            require File::build_path(array('view', 'view.php'));
        }
    }
    
    public static function update() {
        $login = myGet("login");
        if (Session::is_user($login)) {
            $c = ModelCompte::select($login);
            $create = "Modification";
            $actionModif = "update";
            $view = 'update';
            $pagetitle = 'Mise a jour du compte';
            require File::build_path(array('view', 'view.php'));
        }
        else {
            $view = 'connection';
            $pagetitle = 'Connexion requise';
            require File::build_path(array('view', 'view.php'));
        }
    }
    
    public static function updated() {
        $data = array(
            'login' => myGet('login'),
            'mail' => myGet('mail'),
        );
        if (Session::is_user($data['login'])) {
            if (strcmp(myGet('mdp'), myGet('mdp2') == 0)) {
                $data['mdp'] = Securite::hash(myGet('mdp'));
                $isGood = ModelCompte::update($data);
                if ($isGood == false) {
                    $login = $data['login'];
                    $view = 'error';
                    $pagetitle = 'Erreur de mise a jour de compte';
                    require File::build_path(array('view', 'view.php'));
                }
                else {
                    $tab_c = ModelCompte::selectAll();
                    $view = 'updated';
                    $pagetitle = 'Utilisateur updatede';
                    require File::build_path(array('view', 'view.php'));
                }
            }
            else {
                $login = $data['login'];
                $view = 'error';
                $pagetitle = 'Les mots de passes sont diferents';
                require File::build_path(array('view', 'view.php'));
            }
        }
        else {
            $login = $data['login'];
            $view = 'connection';
            $pagetitle = 'Connexion requise';
            require File::build_path(array('view', 'view.php'));
        }
    }
    
    public static function create() {
        $c = new ModelCompte(array ("login" => null, "mail" => null, "mdp" => null));
        $create = 'Créer un compte';
        $actionModif = "create";
        $view = 'update';
        $pagetitle = 'Creation de Compte';
        require File::build_path(array('view', 'view.php'));
    }
    
    public static function created() {

        if(!(preg_match('@[a-z0-9]{3,10}@', myGet('login')))){
            //pseudo saisi n'est pas valide 
            $nom1 = myGet("nom");
            $mail1 = myGet("mail");
            
            $actionModif = "create";
            $view = 'update';
            $pagetitle = 'login non valide';
            require File::build_path(array('view', 'view.php'));
        }
        elseif(!(preg_match('/^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/', myGet("mail")))){
            $login1 = myGet("login");
            $mail1 = myGet("mail");
            
            $actionModif = "create";
            $view = 'update';
            $pagetitle = 'mail non valide';
            require File::build_path(array('view', 'view.php'));
            //test email valide 
        }
        else{

        $data = array(
            'login' => myGet('login'),
            'mail' => myGet('mail'),
        );
        if (strcmp(myGet('mdp'), myGet('mdp2')) == 0) {
            if (filter_var($data["mail"], FILTER_VALIDATE_EMAIL)!=false) {
                $data['mdp'] = Securite::hash(myGet('mdp'));
                $data['nonce'] = Securite::generateRandomHex();
                $isGood = ModelCompte::create($data);
                if ($isGood == false) {
                    $view = 'error';
                    $pagetitle = 'Erreur de creation de compte';
                    require File::build_path(array('view', 'view.php'));
                }
                else {
                    $mail = Mail::getMail($data['login'], $data['nonce']);
                    mail($data['mail'], "Validation du compte", $mail);
                    $tab_c = ModelCompte::selectAll();
                    $view = 'created';
                    $pagetitle = 'Utilisateur created';
                    require File::build_path(array('view', 'view.php'));
                }
            }
            else {
                $login = $data['login'];
                $view = 'error';
                $pagetitle = 'Email non-valide';
                require File::build_path(array('view', 'view.php'));
            }
        }
        else {
            $login = $data['login'];
            $view = 'error';
            $pagetitle = 'Les mots de passes sont diferents';
            require File::build_path(array('view', 'view.php'));
        }
        }
    }
    
    public static function delete() {
        $login = myGet('login');
        if (Session::is_user($login)) {
            $isGood = ModelCompte::delete($login);
            if ($isGood == false) {
                $view = 'error';
                $pagetitle = 'Erreur de suppression de Compte';
                require File::build_path(array('view', 'view.php'));
            }
            else {
                $tab_c = ModelCompte::selectAll();
                $view = 'supprimme';
                $pagetitle = 'Compte supprime';
                require File::build_path(array('view', 'view.php'));
            }
        }
        else {
            $view = 'connection';
            $pagetitle = 'Connexion requise';
            require File::build_path(array('view', 'view.php'));
        }
    }
    
    public static function connection() {
        $erreur = false;
        $view = 'connection';
        $pagetitle = 'Page de connection';
        require File::build_path(array('view', 'view.php'));
    }
    
    public static function connected() {
        $login = myGet('login');
        $mdp = Securite::hash(myGet('mdp'));
        $nonceEmpty = ModelCompte::nonceEmpty($login);
        if ($nonceEmpty) {
            $estValide = ModelCompte::evaluateMDP($login, $mdp);
            if ($estValide) {
                $_SESSION['login'] = $login;
                $_SESSION['admin'] = ModelCompte::isAdmin($login);
                $erreur = false;
                $c = ModelCompte::select($login);
                $estadmin = ModelCompte::isAdmin($login);
                $view = 'detail';
                $pagetitle = 'Connexion reussie';
                require File::build_path(array('view', 'view.php'));
            }
            else {
                $erreur = true;
                $view = 'connection';
                $pagetitle = 'Erreur lors de la connection';
                require File::build_path(array('view', 'view.php'));
            }
        }
        else {
            $erreur = true;
            $view = 'connection';
            $pagetitle = "Veuillez confirmer l'email";
            require File::build_path(array('view', 'view.php'));
        }
    }
    
    public static function deconnection() {
        session_unset();     // unset $_SESSION variable for the run-time 
        setcookie(session_name(),'',time()-1); // deletes the session cookie containing the session ID
        $view = 'connection';
        $pagetitle = 'Deconnection reussie';
        require File::build_path(array('view', 'view.php'));
    }
    
    public static function validate() {
        $login = myGet('login');
        $nonce = myGet("nonce");
        $nonceOK = ModelCompte::validateNonce($login, $nonce);
        if ($nonceOK) {
            ModelCompte::update(array("login" => $login, "nonce" => NULL));
            $view = 'connection';
            $pagetitle = 'Validation reussie';
            require File::build_path(array('view', 'view.php'));
        }
        else {
            $view = 'error';
            $pagetitle = 'Erreur de validation';
            require File::build_path(array('view', 'view.php'));
        }
    }

    public static function changeAdmin(){
        $login = myGet('login');
        $c = ModelCompte::select($login);
        if (Session::is_admin()) {
            if ($_SESSION['login']!=$c->get('login')) {
                $estadmin = ModelCompte::isAdmin($login);

                ModelCompte::changeAdmin($login, $estadmin);

                $estadmin = ModelCompte::isAdmin($login);

                $pagetitle = 'Droits modifiés';
                $view = 'detail';
                $c = ModelCompte::select($login);
                require File::build_path(array('view', 'view.php'));
            }
            else {
                $view = 'detail';
                $pagetitle = 'Erreur : même compte';
                $estadmin = ModelCompte::isAdmin($login);
                require File::build_path(array('view', 'view.php'));
            }
        }
        else {
            $view = 'connection';
            $pagetitle = 'Connexion requise';
            require File::build_path(array('view', 'view.php'));
        }
    }

}