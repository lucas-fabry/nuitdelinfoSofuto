<?php
echo "<p><b>Le tab d'id " . htmlspecialchars($data['idTag']) ." a bien été créé !</b></p>";
require File::build_path(array('view', 'tag', 'list.php'));
?>