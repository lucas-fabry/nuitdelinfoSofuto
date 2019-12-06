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

    echo '<input type="hidden" value="'. htmlspecialchars($com->get('idCommentaire')) .'" placeholder="Ex : 0" name="idCommentaire" id="idCommentaire_id" required hidden/>';

    echo '<input type="hidden" value="'.htmlspecialchars(myGet('idTopic')).'" '
        .'placeholder="Ex : 1" name="idTopic" id="idTopic_id" required hidden/>';
    ?>
    <p>
      <label for="texteCommentaire_id">Texte du Commentaire</label> :
      <?php
      echo '<input type="text" value="'.htmlspecialchars($com->get('texteCommentaire')).'" placeholder="Ex : Bonjour, pour adopter un chat, il faut ..." name="texteCommentaire" id="texteCommentaire_id" required/>';
      ?>
    </p>
    <p>
      <button class="btn waves-effect waves-light" type="submit" value="envoyer">Envoyer</button>
    </p>
  </fieldset> 
</form>
</div>