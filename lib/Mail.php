<?php
class mail {   
    public static function getMail($login, $nonce) {
        return "<p>Bonjour ".htmlspecialchars($login).",</p>
                <p>
                    Veillez confirmer votre adresse mail en cliquant sur le lien suivant :
                </p>
                <p><a href=\"http://webinfo.iutmontp.univ-montp2.fr/~clementa/eCommerce/index.php?controleur=client&action=valider&login=".htmlspecialchars($login)."&nonce=".htmlspecialchars($nonce)."\">Valider</a></p>";
    }
}
?>

