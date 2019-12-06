<?php
echo '<div class="card"><div class="card-content">'."\n";
  echo '<div>'.htmlspecialchars($t->get("dateTopic")).'</div>'."\n";
  echo '<div><a href="index.php?action=read&controller=compte&login='.rawurldecode($t->get("loginCompte")).'">'.htmlspecialchars($t->get("loginCompte")).'</a></div>'."\n";
  echo '<div class="card-title">'.htmlspecialchars($t->get("nomTopic")).'</div>'."\n";
  echo '<p>'.htmlspecialchars($t->get('texteTopic')).'</p>'."\n";
echo '</div></div>'."\n"."\n";
?>
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