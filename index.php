<?php
$name = 'Tom';
$greeting = 'Hello ' . $name;

$hobbies = [
    'trekking',
    'programování',
    'školení',
];
?>
<h1><?= $greeting ?></h1>

<h2>Záliby</h2>
<ul>
    <?php foreach ($hobbies as $hobby) {
        echo '<li>' . $hobby . '</li>';
    } ?>
</ul>
