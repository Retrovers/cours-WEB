<?php
require 'utils.inc.php';
start_page("Connexion");
?>
<?php
if (isset ($_SESSION['errors']) && count ($_SESSION['errors']) != 0){
    ?>
    <div class="alert alert-danger">
        <?= $_SESSION['errors'] ?>
    </div>
    <?php
    unset($_SESSION['errors']);
}
if (isset($_SESSION['success']) && count($_SESSION['success']) != 0){
    ?>
    <div class="alert alert-success">
        <?= $_SESSION['success'] ?>
    </div>
    <?php
    unset($_SESSION['success']);
}
?>
<div class="card">
    <div class="card-body">
        <form action="data-processing-login.php" method="post">
            <div class="form-group">
                <label for="">Identifiant</label>
                <input type="text" name="identifiant" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Mot de passe</label>
                <input type="password" name="password" class="form-control">
            </div>
            <input type="submit" class="btn btn-primary" value="Connexion">
            <a href="register.php" class="btn btn-outline-dark">S'inscrire</a>
        </form>
    </div>
</div>