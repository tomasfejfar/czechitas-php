<?php
$template = 'kontakt';
if (count($_POST)) {
    $name = $_POST['name'];
    $message = $_POST['message'];
    if(mail('tomas.fejfar@gmail.com', 'Zpráva od ' . $name, $message)) {
        header('Location:/?page=podekovani');
    } else {
        die('Email nešlo odeslat :(');
    }

}

