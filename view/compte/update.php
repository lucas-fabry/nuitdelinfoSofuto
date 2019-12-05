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
<?php 
$login = "";
$mail = "";

if(isset($login1)){
    $login = $_GET["login"];
}
if(isset($mail1)){
    $mail = $_GET["mail"];
}

?>
  <fieldset>
    <legend> <?php echo $creer ?> </legend>
    <?php
    echo '<input type="hidden" value="';
    if ($actionModif == "update") {
        echo 'updated';
        $login = htmlspecialchars($c->get("login"));
        $mail = htmlspecialchars($c->get("mail"));
    }
    if ($actionModif == "create") {
        echo 'created';
    }
    echo '" name="action"/>';
    ?>
    <?php
    echo '<input type="text" value="'.htmlspecialchars(static::$object).'" placeholder="Ex : Produit" name="controller" id="control_id" required hidden/>';
    ?>
    <p>
      <label for="login_id">Login</label> :
      <?php
      echo '<input type="text" value="'. htmlspecialchars($login) .'" placeholder="Ex : Xx_Dark_Sasuke_69420_xX" name="login" id="login_id" required/>';
      ?>
    </p>
    <p>
      <label for="mail_id">Mail</label> :
      <?php
      echo '<input type="email" value="'.htmlspecialchars($mail).'" '
          .'placeholder="Ex : exemple@exemple.com" name="mail" id="mail_id" required/>';
      ?>
    </p>
    <p>
      <label for="mdp_id">Mot de passe</label> :
      <?php
      echo '<input type="password" placeholder="Ex : 1fa3Eh54$ù" name="mdp" id="mdp_id" required/>';
      ?>
    </p>
    <p>
      <label for="mdp2_id">Confirmez Mot de passe</label> :
      <?php
      echo '<input type="password" placeholder="Ex : copiez le truc au dessu" name="mdp2" id="mdp2_id" required/>';
      ?>
    </p>
    <p>
      <button class="btn waves-effect waves-light" type="submit" value="envoyer">Envoyer</button>
    </p>
  </fieldset> 
</form>
</div>