<?php

if (empty($_GET['page'])) {
    require 'controllers/hlavni.php';
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
