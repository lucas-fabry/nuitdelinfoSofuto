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

    echo '<input type="hidden" value="'. htmlspecialchars($t->get('idTopic')) .'" placeholder="Ex : 0" name="idTopic" id="idTopic_id" required hidden/>';
    ?>
    <p>
      <label for="nomTopic_id">Nom du topic</label> :
      <?php
      echo '<input type="text" value="'.htmlspecialchars($t->get('nomTopic')).'" '
          .'placeholder="Ex : Comment adopter un chat" name="nomTopic" id="nomTopic_id" required/>';
      ?>
    </p>
    <p>
      <label for="texteTopic_id">Texte du topic</label> :
      <?php
      echo '<input type="text" value="'.htmlspecialchars($t->get('texteTopic')).'" placeholder="Ex : Entrez une description du topic" name="texteTopic" id="texteTopic_id" required/>';
      ?>
    </p>
    <p>
      <button class="btn waves-effect waves-light" type="submit" value="envoyer">Envoyer</button>
    </p>
  </fieldset> 
</form>
</div>