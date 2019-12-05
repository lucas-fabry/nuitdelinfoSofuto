<div class="card-panel">
<?php
if (isset($erreur)) {
    if ($erreur) {
        echo "<p><b>Erreur lors de la connexion. Verifiez votre login et votre mot de passe.</b></p>";
    }
}
?>
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
    <legend>Connexion</legend>
    <input type="hidden" value="connected" name="action">
    <input type="hidden" value="compte" name="controller">
    <p>
      <label for="login_id">Login</label> :
      <?php
      echo '<input ';
      if (isset($_GET['login'])) {
          echo 'value="'.$_GET['login'].'" ';
      }
      echo 'type="text" placeholder="Ex : Xx_DaRk_sAsUkE_xX" name="login" id="login_id" required/>';
      ?>
    </p>
    <p>
      <label for="mdp_id">Mot de passe</label> :
      <input type="password" placeholder="Ex : CeciEstUnMotDePasse" name="mdp" id="mdp_id" required/>
    </p>
    <p>
        <button class="btn waves-effect waves-light" type="submit" value="envoyer">Envoyer</button>
    </p>
  </fieldset> 
</form>
</div>