<div style="position: absolute"><img src="https://image.aveshack.com/8ce9abc24ddc6457.png"/> <p style="margin-left:3vw;">Coffre n°1, j'ai la clé !</p></div>

<div style="position: absolute; margin-left: 35vw;"><img src="https://image.aveshack.com/8ce9abc24ddc6457.png" /> <p style="margin-left:3vw;">Coffre n°2, j'ai la clé !</p></div>

<div style="position: absolute; margin-left: 70vw;"><img src="https://image.aveshack.com/8ce9abc24ddc6457.png" /> <p style="margin-left:3vw;">Coffre n°3, j'ai la clé !</p></div>


<p style="font-size: 8vh; margin-top: 50vh; text-align: center;">Seul un de ces coffres dit la vérité, où est la clé ?</p>

<div class="container center">
<div class="row">
<form class="col s2" method="post" action="index.php?action=verifReponse&controller=secret">
    <input class="" type="number" name="valeur" min="1" max="3"></input>
    
    <input type="submit" value="Répondre">
</form>

<?php 

if(isset($erreurs)){echo('<p style="color: red;">' . $erreurs[0] . '</p>');}

?>
</div>
</div>