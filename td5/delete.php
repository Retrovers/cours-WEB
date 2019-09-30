<?php
if (file_exists('cache/index.html ')) {
    unlink('cache/index.html');
    echo '<p>Le fichier cache a été supprimer ! <a href="index.php">Cliquez ici pour revenir</a></p>';
} else {
    header("Location:index.php");
}