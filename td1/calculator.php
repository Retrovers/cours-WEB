<?php
require 'functions.php';
start_page('Ma super calculatrice');
?>
<form action="calcul.php" method="get">
    <input type="number" name="op1" placeholder="1er chiffre">
    <input type="number" name="op2" placeholder="2ieme chiffres">
    <input type="radio" checked="checked" name="action" value="*">*<br>
    <input type="radio" name="action" value="+">+<br>
    <input type="radio" name="action" value="-">-<br>
    <input type="radio" name="action" value="/">/<br>
    <input type="submit">
</form>
<? end_page();  ?>