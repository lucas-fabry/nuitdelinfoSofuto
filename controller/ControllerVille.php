<?php

class ControllerVille {
	public static $object = "ville";

	public static function afficher() {
		$view = 'ville';
        $pagetitle = 'JUST SQUARES';
        require File::build_path(array('view', 'view.php'));
	}
}