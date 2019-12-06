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
    <legend> <?php echo $creer ?> </legend>
    <?php
    echo '<input type="hidden" value="';
    if ($actionModif == "update") {
        echo 'updated';
    }
    if ($actionModif == "create") {
        echo 'created';
    }
    echo '" name="action"/>';
    ?>
    <?php
    echo '<input type="text" value="'.htmlspecialchars(static::$object).'" placeholder="Ex : Produit" name="controller" id="control_id" required hidden/>';

    echo '<input type="hidden" value="'. htmlspecialchars($tag->get('idTag')) .'" placeholder="Ex : 0" name="idCommentaire" id="idCommentaire_id" required hidden/>';
    ?>
    <p>
      <label for="nomTag_id">Nom du tag</label> :
      <?php
      echo '<input type="text" value="'.htmlspecialchars($tag->get('nomTag')).'" placeholder="Ex : Argent" name="nomTag" id="nomTag_id" required/>';
      ?>
    </p>
    <p>
      <button class="btn waves-effect waves-light" type="submit" value="envoyer">Envoyer</button>
    </p>
  </fieldset> 
</form>
</div>