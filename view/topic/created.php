<?php
echo "<p><b>Le topic d'id " . htmlspecialchars($data['idTopic']) ." a bien été créé !</b></p>";
require File::build_path(array('view', 'topic', 'list.php'));
?>