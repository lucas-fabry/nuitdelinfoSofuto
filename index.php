<?php
session_start();
$DS = DIRECTORY_SEPARATOR;
require_once 'lib'.$DS.'Session.php';
require_once 'lib'.$DS.'File.php';
require 'controller'.$DS.'router.php';
?>