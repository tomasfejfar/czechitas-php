<?php
$name = 'Tom';
$greeting = 'Hello ' . $name;

$hobbies = [
    'trekking',
    'programování',
    'školení',
    'procházky',
];

$me = [
    'Tomáš',
    'Fejfar',
];
?>
<h1><?= $greeting ?></h1>

<h2>O mně</h2>
<ul>
    <?php foreach ($me as $characteristic) { ?>
        <li><?= $characteristic ?></li>
    <?php } ?>
</ul>


<h2>Záliby</h2>
<ul>
    <?php foreach ($hobbies as $hobby) { ?>
        <li><?= $hobby ?></li>
    <?php } ?>
</ul>
