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
echo '<div class="row">';
echo '<div class="col s6">';
foreach ($tab_t as $t) {
    echo '<div class="card"><div class="card-content">'."\n";
        echo '<div>'.htmlspecialchars($t->get("dateTopic")).'</div>'."\n";
        echo '<div><a href="index.php?action=read&controller=compte&login='.rawurldecode($t->get("loginCompte")).'">'.htmlspecialchars($t->get("loginCompte")).'</a></div>'."\n";
        echo '<div class="card-title">'.htmlspecialchars($t->get("nomTopic")).'</div>'."\n";
        echo '<p>'.htmlspecialchars($t->get('texteTopic')).'</p>'."\n";

        if (Session::is_user($t->get('loginCompte'))) {
            echo '<div class="card-action">';
            echo '<a href="index.php?action=update&controller=topic&'
                    . 'idTopic='.rawurlencode($t->get("idTopic")).'">'
                    . 'Modifier le topic'
                . '</a>';
            echo '<a href="index.php?action=delete&controller=topic&'
                    . 'idTopic='.rawurlencode($t->get("idTopic")).'">'
                    . 'Supprimer le topic'
                . '</a>'."\n";
            echo '</div>';
        }   
    
    echo '</div></div>'."\n"."\n";
}
echo '</div>';
echo '<div class="col s6">';
foreach ($tab_com as $com) {
    echo '<div class="card purple darken-2">'."\n";
        echo '<div class="card-content white-text">'."\n";
            echo '<div>'.htmlspecialchars($com->get('dateCommentaire')).'</div>'."\n";
            echo '<div>'.htmlspecialchars($com->get('loginCompte')).'</div>'."\n";
            echo '<p>'.htmlspecialchars($com->get('texteCommentaire')).'</p>'."\n";
        echo '</div>'."\n";
        if (Session::is_user($com->get('loginCompte'))) {
            echo '<div class="card-action">'."\n";
                echo '<a href="index.php?action=update&controller=commentaire&idCommentaire='.rawurldecode($com->get('idCommentaire')).'&idTopic='.rawurlencode($com->get('idTopic')).'">Modifier</a>'."\n";
                echo '<a href="index.php?action=delete&controller=commentaire&idCommentaire='.rawurldecode($com->get('idCommentaire')).'">Supprimer</a>'."\n";
            echo '</div>';
        }
    echo '</div>'."\n";
}
echo '</div>';
echo '</div>';