<?php

$isConditionFulfilled = empty($_GET['name']);
if ($isConditionFulfilled) {
    echo 'Podmínka byla splněna - NAME je prázdné';
    $name = 'World';
} else {
    echo 'Podmínka nebyla splněna - NAME je plné';
    $name = $_GET['name'];
}
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

$friends = [
    [
        'name' => 'Lenka',
        'surname' => 'Krafková',
    ],
    [
        'name' => 'Tomáš',
        'surname' => 'Kormaňák',
    ],
];
?>
<h1><?= htmlspecialchars($greeting) ?></h1>

<h2>O mně</h2>
<ul>
    <?php foreach ($me as $key => $characteristic) { ?>
        <li><?= $key ?>: <?= $characteristic ?></li>
    <?php } ?>
</ul>

<h2>Kamarádi</h2>
<ul>
    <?php foreach ($friends as $person) { ?>
        <li><?= $person['name'] ?> <?= $person['surname'] ?></li>
    <?php } ?>
</ul>


<h2>Záliby</h2>
<ul>
    <?php foreach ($hobbies as $hobby) { ?>
        <li><?= $hobby ?></li>
    <?php } ?>
</ul>
