<?php
echo '<p> Compte de login ' . htmlspecialchars($c->get("login")) . '.</p>';
echo '<p> Compte de mail ' . htmlspecialchars($c->get("mail")) . '.</p>';

if (Session::is_user($c->get('login'))) {
    echo '<p>'
            . '<a href="index.php?action=update&controller=compte&'
            . 'login='.rawurlencode($c->get("login")).'">'
                . '<button class="btn waves-effect waves-light" type="button">'
                    . 'Modifier le compte'
                . '</button>'
            . '</a>';
    echo '<a href="index.php?action=delete&controller=compte&'
            . 'login='.rawurlencode($c->get("login")).'">'
                . '<button class="btn waves-effect waves-light" type="button">'
                    . 'Supprimer'
                . '</button>'
            . '</a>'
        . '</p>'."\n";
}
if (Session::is_admin()&&$_SESSION['login']!=$c->get('login')) {
    if($estadmin){
        echo '<p>'
            . '<a href="index.php?action=changeAdmin&controller=compte&'
            . 'login='.rawurlencode($c->get("login")).'">'
            . '<button class="btn waves-effect waves-light" type="button">'
            . 'Enlever les droits d\'administrateur'
            . '</button>'
            . '</a>'
            . '</p>';
    }
    else{
        echo '<p>'
            . '<a href="index.php?action=changeAdmin&controller=compte&'
            . 'login='.rawurlencode($c->get("login")).'">'
            . '<button class="btn waves-effect waves-light" type="button">'
            . 'Donner les droits d\'administrateur'
            . '</button>'
            . '</a>'
            . '</p>';
    }
}
