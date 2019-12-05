<?php
require_once File::build_path(array('controller','ControllerCompte.php'));


function myGet($nomVar) {
    if (isset($_POST[$nomVar])){
        return $_POST[$nomVar];
    }
    else if (isset($_GET[$nomVar])) {
        return $_GET[$nomVar];
    }
    else {
        return NULL;
    }
}

function myCookie($nomVar) {
    if (isset($_COOKIE[$nomVar])) {
        return $_COOKIE[$nomVar];
    }
    else {
        return null;
    }
}

// On recupère l'action passée dans l'URL
if (!is_null(myget("action"))){
    $action = myget("action");
}
else {
    $action = "readAll";
}

// On recupère le controller passée dans l'URL
if (!is_null(myget("controller"))) {
    $controller = myget("controller");
}
else {
    $controller = "topic";
}

$controller_class = "controller".ucfirst($controller);

if (class_exists($controller_class)) {
    if (in_array($action, get_class_methods($controller_class))) {
        $controller_class::$action();
    }
    else {
        $view = 'error';
        $pagetitle = 'Erreur de methode';
        require File::build_path(array('view', 'view.php'));
    }
}
else {
    $view = 'error';
    $pagetitle = 'Erreur, controleur non valide';
    require File::build_path(array('view', 'view.php'));
}
?>
