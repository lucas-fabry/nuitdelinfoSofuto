<?php
echo '<p> Tag d\'idTag ' . htmlspecialchars($tag->get("idTag")) . '.</p>';
echo '<p> Tag de nomTag ' . htmlspecialchars($tag->get("nomTag")) . '.</p>';

if (Session::is_admin()) {
    echo '<p>'
            . '<a href="index.php?action=update&controller=tag&'
            . 'idTag='.rawurlencode($tag->get("idTag")).'">'
                . '<button class="btn waves-effect waves-light deep-orange lighten-2" type="button">'
                    . 'Modifier le tag'
                . '</button>'
            . '</a>';
    echo '<a href="index.php?action=delete&controller=tag&'
            . 'idTag='.rawurlencode($tag->get("idTag")).'">'
                . '<button class="btn waves-effect waves-light deep-orange lighten-2" type="button">'
                    . 'Supprimer le tag'
                . '</button>'
            . '</a>'
        . '</p>'."\n";
}