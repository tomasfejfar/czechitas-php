<?php
$name = 'Tom';
$greeting = 'Hello ' . $name;

$hobbies = [
    'trekking',
    'programování',
];
?>
<h1><?= $greeting ?></h1>

<h2>Záliby</h2>
<ul>
    <li><?= $hobbies[0] ?></li>
    <li><?= $hobbies[1] ?></li>
</ul>
