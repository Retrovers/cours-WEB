<?php
require  'cache.class.php';

$cache = new Cache('index');
$cache->cacheView();
$cache->startBuffer();

?>
<p>
    Version cache du site ! <br>
    <a href="delete.php">Supprimer le cache</a>
</p>
<?php

$cache->endBuffer();

?>
<p>C'est en dehors du cache ça</p>
