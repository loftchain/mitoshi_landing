<?php
$langAr = require_once(__DIR__ . '/lang/' . $language->currentLang . '.php');

function lang($property = null) {
    global $langAr;

    if(!isset($langAr[$property])) {
        return 'ERROR! No property.';
    }

    return $langAr[$property];
}

