<?php
session_start();

$db = new PDO("mysql:host=localhost;dbname=cours", 'root', '');

function start_page ($title) {
    ?>
    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <title> <?= $title ?> </title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body class="container mt-3">
    <?php
}
function end_page (){
    $jour = date ('d/m/Y', strtotime("2020-04-01"));
    echo $jour;
    ?>
    </body>
    </html>
    <?php
}
