<?php
echo '<p> Commentaire d\'idCommentaire ' . htmlspecialchars($com->get("idCommentaire")) . '.</p>';
echo '<p> Commentaire de texteCommentaire ' . htmlspecialchars($com->get("texteCommentaire")) . '.</p>';
echo '<p> Commentaire de dateCommentaire ' . htmlspecialchars($com->get("dateCommentaire")) . '.</p>';
echo '<p> Commentaire de loginCompte ' . htmlspecialchars($com->get("loginCompte")) . '.</p>';
echo '<p> Commentaire de idTopic ' . htmlspecialchars($com->get("idTopic")) . '.</p>';

if (Session::is_user($com->get('loginCompte'))) {
    echo '<p>'
            . '<a href="index.php?action=update&controller=commentaire&'
            . 'idCommentaire='.rawurlencode($com->get("idCommentaire")).'">'
                . '<button class="btn waves-effect waves-light deep-orange lighten-2" type="button">'
                    . 'Modifier le commentaire'
                . '</button>'
            . '</a>';
    echo '<a href="index.php?action=delete&controller=commentaire&'
            . 'idCommentaire='.rawurlencode($com->get("idCommentaire")).'">'
                . '<button class="btn waves-effect waves-light deep-orange lighten-2" type="button">'
                    . 'Supprimer le commentaire'
                . '</button>'
            . '</a>'
        . '</p>'."\n";
}