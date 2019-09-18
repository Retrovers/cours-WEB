<?php
require 'utils.inc.php';

$identifiant = htmlspecialchars(filter_input(INPUT_POST, 'identifiant'));
$password = htmlspecialchars(filter_input(INPUT_POST, 'password'));
$passwordVerif = htmlspecialchars(filter_input(INPUT_POST, 'passwordVerif'));
$email = htmlspecialchars(filter_input(INPUT_POST, 'email'));
$pays = htmlspecialchars(filter_input(INPUT_POST, 'pays'));
$sexe = htmlspecialchars(filter_input(INPUT_POST, 'sexe'));
$tel = htmlspecialchars(filter_input(INPUT_POST, 'tel'));
$cg = htmlspecialchars(filter_input(INPUT_POST, "cg"));

$errors = [];

($cg != 'on') ? array_push($errors, 'Condition generale non accepté') : null;
($password != $passwordVerif) ? array_push($errors, 'Mot de passe non identique') : null;

if (count($errors) == 0){

    $req = $db->prepare("INSERT INTO users (identifiant, password, email, pays, sexe, tel) VALUES (:identifiant, :password, :email, :pays, :sexe, :tel)");
    $req->bindParam(':identifiant', $identifiant);
    $req->bindParam(':password', sha1($password));
    $req->bindParam(':email', $email);
    $req->bindParam(':pays', $pays);
    $req->bindParam(':sexe', $sexe);
    $req->bindParam(':tel', $tel);

    $req->execute();

    $_SESSION['success'] = 'Vous vous êtes bien inscrit ! Vous pouvez maintenant vous connecter';
    header("Location:login.php");
} else {
    $_SESSION['errors'] = $errors;
    header("Location:register.php");
}