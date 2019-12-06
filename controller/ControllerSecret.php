<?php

class ControllerSecret {
    
    protected static $object = "Secret";

    public static function verifReponse(){
        if(isset($_POST["valeur"])){
            if($_POST["valeur"] == "1"){
                $view = "suite";
                $pagetitle = "suite";
                require File::build_path(array('view', 'view.php'));
            }
            elseif ($_POST["valeur"] == "2" ||$_POST["valeur"] == "3") {
                ControllerTopic::verifReponse();
                
            }
            else {
                ControllerTopic::verifReponse();
            }
        }
    
        else{
            ControllerTopic::verifReponse();
        }
    }

    public static function gagner(){
        if(isset($_POST["code"])){
            if(strtoupper($_POST["code"]) == "CS GROUP"){
                $view = "victoire";
                $pagetitle = "Félicitations !";
                require File::build_path(array('view', 'view.php'));
            }

            else {
                $view = "defaite";
                $pagetitle = "Vous avez échoué...";
                require File::build_path(array('view', 'view.php'));
            }
        }

        else {
            $view = "defaite";
            $pagetitle = "Vous avez échoué...";
            require File::build_path(array('view', 'view.php'));
        }

    }

    public static function defaite(){
        $view = "defaite";
        $pagetitle = "Vous avez échoué...";
        require File::build_path(array('view', 'view.php'));
    }
    
}

?>