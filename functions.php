<?php
function e($what) {
    return htmlspecialchars($what, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

function getDb() {
    $pdoOptions = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ];
    return new PDO('mysql:host=127.0.0.1;dbname=blog', 'root', '', $pdoOptions);
}
