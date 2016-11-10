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
    'Jméno' => 'Tomáš',
    'Příjmení' => 'Fejfar',
];
?>
<h1><?= $greeting ?></h1>

<h2>O mně</h2>
<?= $me['Příjmení'] ?>
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
