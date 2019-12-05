<div class="card-panel">
	<a href="index.php?action=create&controller=topic"><button class="btn waves-effect waves-light" type="button"><i class="material-icons">add</i></button></a>
</div>
<?php
foreach ($tab_t as $t) {
    echo '<p> Topic d\'idTopic'
    . ' <a href="index.php?controller=topic&action=read&'
        . 'idTopic='.rawurlencode($t->get('idTopic')).'">'
        . ' ' . htmlspecialchars($t->get('idTopic')) . '</a>.'
        . '</p>'."\n";
}
