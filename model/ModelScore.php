<?php
require_once File::build_path(array('model', 'Model.php'));

class ModelScore extends Model {
    
    protected static $object = "Score";
    protected static $primary = 'Pseudo';
        
    private $pseudo;
    private $score;

    
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