<?php

class DataController
{
    private static $dataUrl = 'https://investor.mitoshi.io/api/data';

    public static function get()
    {
        return json_decode(file_get_contents(self::$dataUrl), true);
    }
}