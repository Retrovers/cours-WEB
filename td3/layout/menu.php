<?php
$menu = [
    [
        'title' => 'Me contacter',
        'url' => 'contact.php'
    ],
    [
        'title' => 'Voir qui ma contacté',
        'url' => 'voir_contact.php'
    ]
];

echo '<h4>Bar de navigation</h4>'.'<nav>';
    for ($i = 0; $i < count ($menu); $i++) {
        ?>
        <a href="<?= $menu[$i]['url'] ?>"><?= $menu[$i]['title'] ?></a>
        <?php
    }
echo '</nav>';
