<?php
require 'utils.inc.php';
start_page('Inscription');
?>

<?php
if (isset ($_SESSION['errors']) && count ($_SESSION['errors'] != 0)){
    ?>
    <div class="alert alert-danger">
        Une ou plusieur(s) erreure(s) on(t) été detectée(s) : <br><ul>
        <?php
            foreach ($_SESSION['errors'] as $k){
                echo  '<li>'. $k . '</li>';
            }
        ?>
        </ul>
    </div>
    <?php
    unset($_SESSION['errors']);
}
?>
<div class="card">
    <div class="card-body">
        <form action="data-processing-register.php" method="post" class="mt-1">
            <div class="form-group">
                <label for="">Identifiant</label>
                <input class="form-control" type="text" name="identifiant" required="required">
            </div>
            <div class="form-group">
                <label for="">Civilité (sexe)</label>
                <input type="radio" name="sexe" value="h"> Homme
                <input type="radio" name="sexe" value="f"> Femme
            </div>
            <div class="form-group">
                <label for="">E-mail</label>
                <input type="email" class="form-control" name="email" required="required">
            </div>
            <div class="form-group">
                <label for="">Mot de passe</label>
                <input type="password" class="form-control" name="password" required="required">
            </div>
            <div class="form-group">
                <label for="">Verification de mot de passe</label>
                <input type="password" class="form-control" name="passwordVerif" required="required">
            </div>
            <div class="form-group">
                <label for="">Telephone</label>
                <input type="tel" class="form-control" name="tel" required="required">
            </div>
            <div class="form-group">
                <label for="">Pays</label>
                <select name="pays" class="form-control" id="" required="required">
                    <option value="fr">France</option>
                    <option value="ca">Canada</option>
                    <option value="it">Italie</option>
                    <option value="es">Espagne</option>
                    <option value="al">Allemagne</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">Condition générales</label>
                <input type="checkbox" name="cg" required="required">
            </div>
            <input type="submit" class="btn btn-primary" value="S'inscrire">
            <a href="login.php" class="btn btn-outline-dark">Se connecter</a>
        </form>

    </div>
</div>

<? end_page(); ?>
