<div class="card-panel">
<?php
echo "<form method=\"";
if (Conf::getDebug()) {
    echo "get";
}
else {
    echo "post";
}
echo "\" action=\"index.php\">";
?>
  <fieldset>
    <legend> Ajouter un tag </legend>
    <?php
    echo '<input type="hidden" value="addedTag" name="action"/>';
    ?>
    <?php
    echo '<input type="text" value="'.htmlspecialchars(static::$object).'" placeholder="Ex : Produit" name="controller" id="control_id" required hidden/>';

    echo '<input type="hidden" value="'. htmlspecialchars($t->get('idTopic')) .'" placeholder="Ex : 0" name="idTopic" id="idTopic_id" required hidden/>';

    foreach ($tab_tag as $key => $tag) {
      $id = rawurldecode($tag->get('idTag'));
      echo '<p>
       <input type="checkbox" name="'.$id.'" id="cb'.$id.'_id" />
       <label for="cb'.$id.'_id">'.htmlspecialchars($tag->get('nomTag')).'</label>
    </p>';
    }
    ?>
    <p>
      <button class="btn waves-effect waves-light" type="submit" value="envoyer">Envoyer</button>
    </p>
  </fieldset> 
</form>
</div>