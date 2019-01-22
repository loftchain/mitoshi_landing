<?php
session_start();

class LanguageController
{
    public $currentLang = 'en';
    private $lang = [
      'en',
      'ru',
      'viet',
      'ch'
    ];

    public function __construct()
    {
        if (isset($_SESSION['lang'])) {
            $this->currentLang = $_SESSION['lang'];
        }
    }

    public function setLang()
    {
        if(isset($_GET['lang']) && $this->validLang($_GET['lang'])) {
            $_SESSION['lang'] = $_GET['lang'];
            $this->currentLang = $_GET['lang'];
        }
    }

    private function validLang($lang)
    {
        if (!in_array($lang, $this->lang)) {
            return false;
        }

        return true;
    }
}