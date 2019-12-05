<?php
echo '<p> Topic d\'idTopic ' . htmlspecialchars($t->get("idTopic")) . '.</p>';
echo '<p> Topic de nomTopic ' . htmlspecialchars($t->get("nomTopic")) . '.</p>';
echo '<p> Topic de texteTopic ' . htmlspecialchars($t->get("texteTopic")) . '.</p>';
echo '<p> Topic de dateTopic ' . htmlspecialchars($t->get("dateTopic")) . '.</p>';
echo '<p> Topic de loginCompte ' . htmlspecialchars($t->get("loginCompte")) . '.</p>';

if (Session::is_user($t->get('loginCompte'))) {
    echo '<p>'
            . '<a href="index.php?action=update&controller=topic&'
            . 'idTopic='.rawurlencode($t->get("idTopic")).'">'
                . '<button class="btn waves-effect waves-light" type="button">'
                    . 'Modifier le topic'
                . '</button>'
            . '</a>';
    echo '<a href="index.php?action=delete&controller=topic&'
            . 'idTopic='.rawurlencode($t->get("idTopic")).'">'
                . '<button class="btn waves-effect waves-light" type="button">'
                    . 'Supprimer le topic'
                . '</button>'
            . '</a>'
        . '</p>'."\n";
}