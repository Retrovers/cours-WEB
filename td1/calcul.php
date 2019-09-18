<?php
$op = $_GET['action'];
$op1 = $_GET['op1'];
$op2 = $_GET['op2'];

function text($op){
    return 'Le resultat utlisant l\'operateur ' . $op . ' est ';
}

if ('*' == $op) {
    echo text($op) . ( $op1 * $op2 );
} else if ('+' == $op) {
    echo text($op) . ( $op1 + $op2 ) ;
} else if ('-' == $op) {
    echo text($op) . ( $op1 - $op2 );
} else if ('/' == $op){
    echo text($op)  . ( $op1 / $op2 );
} else {
    ?>
    <br><strong>opérateur <?= $op ?> non géré</strong>
    <?php
}