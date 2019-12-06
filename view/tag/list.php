<?php
foreach ($tab_tag as $tag) {
    echo '<p> Tag de idTag'
    . ' <a href="index.php?controller=tag&action=read&'
        . 'idTag='.rawurlencode($tag->get('idTag')).'">'
        . ' ' . htmlspecialchars($tag->get('idTag')) . '</a>.'
        . '</p>'."\n";
}
