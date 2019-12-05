<?php
require_once File::build_path(array('model', 'Model.php'));

class ModelTopic extends Model {
    
    protected static $object = "Topic";
    protected static $primary = 'idTopic';
        
    private $idTopic;
    private $nomTopic;
    private $texteTopic;
    private $dateTopic;
    private $loginCompte;
    
    public function get($nom_attribut) {
        return $this->$nom_attribut;
    }
    
    public function set($nom_attribut, $valeur) {
        $this->$nom_attribut = $valeur;
    }
    
    public function __construct($data = NULL) {
        foreach ((array)$data as $cle => $value) {
            $this->set($cle, $value);
        }
    }
}