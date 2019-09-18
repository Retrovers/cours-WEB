<?php
require 'utils.inc.php';

$identifiant = htmlspecialchars(filter_input(INPUT_POST , 'identifiant'));
$password = htmlspecialchars(filter_input(INPUT_POST, 'password'));

$req = $db->query("SELECT * FROM users WHERE identifiant = '" . $identifiant . "' AND password = '" . sha1($password). "'");

if ($req->rowCount() == 0){
    $_SESSION['errors'] = 'Identifiant ou mot de passe invalide !';
    header("Location:login.php");
} else {
    $_SESSION['success'] = "Vous êtes connecté ! ";
    $_SESSION['user'] = $req->fetchAll(PDO::FETCH_ASSOC)[0];
    header("Location:profil.php");
}