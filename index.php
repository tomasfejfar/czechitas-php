<?php

if (empty($_GET['page'])) {
    if (empty($_GET['name'])) {
        $name = 'World';
    } else {
        $name = $_GET['name'];
    }
    $greeting = 'Hello ' . $name;
    $template = 'hlavni';
} else {
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
    $template = 'o-mne';
}
require 'views/layout.php';
