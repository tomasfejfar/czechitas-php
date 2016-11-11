<?php

if (empty($_GET['page'])) {
    require 'controllers/hlavni.php';
} else {
    $page = $_GET['page'];
    switch ($page) {
        case 'o-mne':
            require 'controllers/o-mne.php';
            break;
    }
}
require 'views/layout.php';
