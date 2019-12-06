<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="description" content="This game is an Webgl FPS multiplayer game realised for learn Babylonjs!" />
        <title><?php echo $pagetitle; ?></title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="view/css/styles.css">
        
        <link rel="icon" href="view/images/index.ico" />
        <?php
        if (myGet('action')=='afficher') {
            echo '<link rel="stylesheet" type="text/css" href="view/css/rendu3D.css" />';
        }
        ?>
        <!-- SCRIPTS DE BASE -->
        <script src="https://cdn.babylonjs.com/babylon.js"></script>
        <script src="https://code.jquery.com/pep/0.4.1/pep.js"></script>
    </head>    
        
    <body class="amber lighten-5">
        
    <header>
        <?php require_once 'menu.php'; ?>
    </header>
    <?php
        $filepath = File::build_path(array("view", static::$object, "$view.php"));
        require $filepath;
    ?>

    <script src="view/scripts.js"></script>
    <script src="view/scripts/Moteur.js"></script>
    <script src="view/scripts/Camera.js"></script>
    <script src="view/scripts/Rendu.js"></script>
    </body>
</html>
