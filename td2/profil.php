<?php
require 'utils.inc.php';
start_page("Profil");

if (!isset($_SESSION['user'])){
    $_SESSION['errors'] = "Vous devez être connecté pour acceder a cette page";
    header("Location:login.php");
    die();
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
        <h5 class="card-title">Contenu de l'utilisteur stocké en session</h5>
        <?= var_dump($_SESSION['user']); ?>
    </div>
    <div class="card-footer">
        <a href="logout.php" class="btn btn-danger">Deconexion</a>
    </div>
</div>

<?php
end_page();