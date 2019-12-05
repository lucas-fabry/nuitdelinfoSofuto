<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $pagetitle; ?></title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
        
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        
        <link rel="icon" href="images/index.ico" />
    </head>    
        
    <body class="amber lighten-5">
        
    <header>
        <?php require_once 'menu.php'; ?>
    </header>
    <?php
        $filepath = File::build_path(array("view", static::$object, "$view.php"));
        require $filepath;
    ?>
        
    </body>
</html>
