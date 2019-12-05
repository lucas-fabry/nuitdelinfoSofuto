<?php
echo "<p><b>Le compte de login " . htmlspecialchars($data['login']) ." a bien été créé !</b></p>";
require File::build_path(array('view', 'compte', 'list.php'));
?>