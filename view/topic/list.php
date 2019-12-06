<div class="card-panel">
	<a href="index.php?action=create&controller=topic"><button class="btn waves-effect waves-light" type="button"><i class="material-icons">add</i></button></a>
</div>
<div class="container">
<?php
foreach ($tab_t as $t) {
	echo '<div class="card"><div class="card-content toExpand">'."\n";
		echo '<div>'.htmlspecialchars($t->get("dateTopic")).'</div>'."\n";
		echo '<div>'.htmlspecialchars($t->get("loginCompte")).'</div>'."\n";
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
		echo '<button class="expandButton btn waves-effect waves-light"><i class="material-icons">expand_more</i></button>'."\n";   
	
    echo '</div></div>'."\n"."\n";
}
?>
</div>
