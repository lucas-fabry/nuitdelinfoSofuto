<?php

class ControllerSecret {
    
    protected static $object = "Secret";

    public function verifReponse(){
        if(isset($_POST["valeur"])){
            if($_POST["valeur"] == "2"){
                $view = "suite";
                $pagetitle = "suite";
               
            }
            elseif ($_POST["valeur"] == "1" ||$_POST["valeur"] == "3") {
                $view = "cassetete";
                $pagetitle = "Clé";
                $erreurs = array("Ce n'est pas le bon chiffre" );
                static $object = "Topic";
                require File::build_path(array('view', 'view.php'));
            }
            else {
                $view = "cassetete";
                $pagetitle = "Clé";
                $erreurs = array("Valeur saisi non valide !" );
                require File::build_path(array('view', 'view.php'));
            }
        }
    
        else{
            $view = "cassetete";
                $pagetitle = "Clé";
                $erreurs = array("Valeur saisi non valide !" );
                require File::build_path(array('view', 'view.php'));
        }
    }
    
}

?>