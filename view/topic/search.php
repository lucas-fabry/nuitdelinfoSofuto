<div class="container">
<?php
echo '<div class="row">';
foreach ($tab_t as $t) {
    echo '<div class="card"><div class="card-content">'."\n";
   		foreach ($tab_tab_tag[$t->get('idTopic')] as $tag) {
			echo '<a href="index.php?controller=topic&action=search&idTag='.rawurldecode($tag->get('idTag')).'"><button class="btn waves-effect waves-light deep-orange lighten-2">'.htmlspecialchars($tag->get('nomTag')).'</button></a>';
			if (Session::is_user($t->get('loginCompte'))) {
				echo '<a href="index.php?controller=topic&action=deleteTag&idTag='.rawurldecode($tag->get('idTag')).'&idTopic='.rawurldecode($t->get('idTopic')).'">X</a>';
			}
		}
		if (Session::is_user($t->get('loginCompte'))) {
			echo '<a href="index.php?controller=topic&action=addTag&idTopic='.rawurldecode($t->get('idTopic')).'"><button class="btn waves-effect waves-light deep-orange lighten-2">Ajouter un tag</button></a>';
		}
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
?>
</div>
