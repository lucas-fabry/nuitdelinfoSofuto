<?php
echo "<p><b>Le commentaire d'id " . htmlspecialchars($data['idCommentaire']) ." a bien été créé !</b></p>";
require File::build_path(array('view', 'commentaire', 'list.php'));
?>