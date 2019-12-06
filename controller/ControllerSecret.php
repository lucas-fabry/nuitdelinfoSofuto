<?php

class ControllerSecret {
    
    protected static $object = "Secret";

    public static function verifReponse(){
        if(isset($_POST["valeur"])){
            if($_POST["valeur"] == "2"){
                $view = "suite";
                $pagetitle = "suite";
                require File::build_path(array('view', 'view.php'));
            }
            elseif ($_POST["valeur"] == "1" ||$_POST["valeur"] == "3") {
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
    
}

?>