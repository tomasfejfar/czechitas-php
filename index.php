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
require 'views/layout.php';
