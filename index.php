<?php

require 'functions.php';

if (empty($_GET['page'])) {
    require 'controllers/hlavni.php';
} else {
    $page = $_GET['page'];
    switch ($page) {
        case 'o-mne':
            require 'controllers/o-mne.php';
            break;
        case 'kontakt':
            require 'controllers/kontakt.php';
            break;
        case 'podekovani':
            require 'controllers/podekovani.php';
            break;
        case 'clanek':
            require 'controllers/clanek.php';
            break;
        default:
            die('Tato stránka neexistuje');
    }
}
require 'views/layout.php';
