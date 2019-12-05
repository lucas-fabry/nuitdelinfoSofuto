
<?php
session_start();
$DS = DIRECTORY_SEPARATOR;
require_once 'lib'.$DS.'Session.php';
require_once 'lib'.$DS.'File.php';
require 'controller'.$DS.'router.php';


?>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
    <link rel="icon" href="images/index.ico" />
</head>

<?php
require_once 'menu.php';
?>