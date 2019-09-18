<?php
function start_page ($title) {
    ?>
    <!DOCTYPE html>
    <html lang="fr">
        <head>
            <title> <?= $title ?> </title>
        </head>
    <body>
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
