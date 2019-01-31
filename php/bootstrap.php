<?php
//Language
require_once(__DIR__ . '/language/LanguageController.php');
$language = new LanguageController();
$language->setLang();
require_once(__DIR__ . '/language/languageHelper.php');

//Data
require_once(__DIR__ . '/data/DataController.php');
$getData = DataController::get();
