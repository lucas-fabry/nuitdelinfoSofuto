<?php
echo '<p><b>Le commentaire d\'id ' . htmlspecialchars($idCommentaire) ." a bien été suprimé !</b></p>";
require File::build_path(array('view', 'commentaire', 'list.php'));
?>