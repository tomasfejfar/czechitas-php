<?php

if (empty($_GET['name'])) {
    $name = 'World';
} else {
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
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
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
</body>
</html>
