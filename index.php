<?php

if (empty($_GET['page'])) {
    require 'controllers/hlavni.php';
} else {
    require 'controllers/o-mne.php';
}
require 'views/layout.php';
