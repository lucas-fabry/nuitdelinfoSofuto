<?php

class Session {
    public static function is_utilisateur($login) {
        return ((!empty($_SESSION['login']) && ($_SESSION['login'] == $login))||Session::est_admin());
    }
    
    public static function is_admin() {
        return (!empty($_SESSION['admin']) && $_SESSION['admin']);
    }
}