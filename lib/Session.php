<?php

class Session {
    public static function est_utilisateur($login) {
        return ((!empty($_SESSION['login']) && ($_SESSION['login'] == $login))||Session::est_admin());
    }
    
    public static function est_admin() {
        return (!empty($_SESSION['admin']) && $_SESSION['admin']);
    }
}