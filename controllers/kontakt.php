<?php
$template = 'kontakt';
if (count($_POST)) {
    $name = $_POST['name'];
    $message = $_POST['message'];
    if(mail('tomas.fejfar@gmail.com', 'Zpráva od ' . $name, $message)) {
        die('Odesláno');
    } else {
        die('Email nešlo odeslat :(');
    }

}

