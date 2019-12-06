<div class="card-panel">
	<a href="index.php?action=create&controller=topic"><button class="btn waves-effect waves-light" type="button"><i class="material-icons">add</i></button></a>
</div>
<?php
foreach ($tab_t as $t) {
	echo '<div class="card"><div class="card-content toExpand">';
		echo '<div>'.htmlspecialchars($t->get("dateTopic")).'</div>';
		echo '<div>'.htmlspecialchars($t->get("loginCompte")).'</div>';
		echo '<div class="card-title">'.htmlspecialchars($t->get("nomTopic")).'</div>';
		echo '<button class="expandButton btn waves-effect waves-light"><i class="material-icons">expand_more</i></button>';   
		echo '<p>'.htmlspecialchars($t->get('texteTopic')).'</p>';
    echo '</div></div>';
}
