<?php
$identite = htmlspecialchars(filter_input(INPUT_POST, 'identite'));
$mail = htmlspecialchars(filter_input(INPUT_POST, 'mail'));
$message = htmlspecialchars(filter_input(INPUT_POST, 'message'));

$file = "data.json";
if (!($file = fopen($file, 'a+'))){
    echo 'erreur au momement de l\'ouverture';
}

fputs($file,  'identite : ' .$identite . ', mail : ' . $mail . ', message : ' . $message . '\n');
fclose($file);
header("Location:voir_contact.php");