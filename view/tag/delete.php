<?php
echo '<p><b>Le tag d\'id ' . htmlspecialchars($idTag) ." a bien été suprimé !</b></p>";
require File::build_path(array('view', 'tag', 'list.php'));
?>