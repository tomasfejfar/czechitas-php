<?php
if (empty($_GET['name'])) {
    $name = 'World';
} else {
    $name = $_GET['name'];
}
$greeting = 'Hello ' . $name;
$template = 'hlavni';
