<div class="container">

<a class="ajoutTopic" href="index.php?action=create&controller=topic"><button class="btn waves-effect waves-light" type="button"><i class="material-icons">add</i></button></a>

<?php
foreach ($tab_t as $t) {
	echo '<div class="card"><div class="card-content toExpand">'."\n";
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

		foreach ($tab_tab_com[$t->get("idTopic")] as $key => $com) {
			echo '<div class="card purple darken-2">'."\n";
				echo '<div class="card-content white-text">'."\n";
					echo '<div>'.htmlspecialchars($com->get('dateCommentaire')).'</div>'."\n";
					echo '<div><a href="index.php?action=read&controller=compte&login='.rawurlencode($com->get('loginCompte')).'">'.htmlspecialchars($com->get('loginCompte')).'</a></div>'."\n";
					echo '<p>'.htmlspecialchars($com->get('texteCommentaire')).'</p>'."\n";
				echo '</div>'."\n";
				if (Session::is_user($com->get('loginCompte'))) {
					echo '<div class="card-action">'."\n";
						echo '<a href="index.php?action=update&controller=commentaire&idCommentaire='.rawurldecode($com->get('idCommentaire')).'&idTopic='.rawurlencode($t->get('idTopic')).'">Modifier</a>'."\n";
						echo '<a href="index.php?action=delete&controller=commentaire&idCommentaire='.rawurldecode($com->get('idCommentaire')).'">Supprimer</a>'."\n";
					echo '</div>';
				}
			echo '</div>'."\n";
		}
		echo '<a href="index.php?action=create&controller=commentaire&idTopic='.rawurlencode($t->get('idTopic')).'"><button class="btn waves-effect waves-light deep-orange lighten-2"><i class="material-icons">add</i></button></a>'."\n";

		echo '<button class="expandButton btn waves-effect waves-light"><i class="material-icons">expand_more</i></button>'."\n";   
	
    echo '</div></div>'."\n"."\n";
}
?>
</div>
