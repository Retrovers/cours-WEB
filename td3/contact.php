<?php
require 'layout/utils.inc.php';
startPage("Index - Contact");
?>

<form action="data-processing.php" method="post" style="margin-top: 1%">
    <label for="" >Identité (Prenom, Nom)</label>
    <input type="text" name="identite"> <br>
    <label for="">Mail</label>
    <input type="email" name="mail"> <br>
    <label for="">Message</label>
    <textarea name="message" id="" cols="30" rows="10" ></textarea> <br>
    <input type="submit">
</form>

<?php
endPage();
