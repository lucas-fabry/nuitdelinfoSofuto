<?php
echo '<p><b>Le compte de login ' . htmlspecialchars($login) ." a bien été suprimé !</b></p>";
require File::build_path(array('view', 'compte', 'list.php'));
?>