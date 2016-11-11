<?php
function e($what) {
    return htmlspecialchars($what, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}
