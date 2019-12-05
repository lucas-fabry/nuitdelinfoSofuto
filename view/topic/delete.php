<?php
echo '<p><b>Le topic d\'id ' . htmlspecialchars($idTopic) ." a bien été suprimé !</b></p>";
require File::build_path(array('view', 'topic', 'list.php'));
?>