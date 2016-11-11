<?php
$template = 'kontakt';
if (count($_POST)) {
    $name = $_POST['name'];
    $message = $_POST['message'];
    mail('tomas.fejfar@gmail.com', 'Zpráva od ' . $name, $message);
    die('Odesláno');
}

