<?php
foreach ($tab_c as $c) {
    echo '<p> Compte de login'
    . ' <a href="index.php?controller=client&action=read&'
        . 'login='.rawurlencode($c->get('login')).'">'
        . ' ' . htmlspecialchars($c->get('login')) . '</a>.'
        . '</p>'."\n";
}
