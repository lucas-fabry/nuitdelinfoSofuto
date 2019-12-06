<?php
foreach ($tab_com as $com) {
    echo '<p> Commentaire de idCommentaire'
    . ' <a href="index.php?controller=commentaire&action=read&'
        . 'idCommentaire='.rawurlencode($com->get('idCommentaire')).'">'
        . ' ' . htmlspecialchars($com->get('idCommentaire')) . '</a>.'
        . '</p>'."\n";
}
