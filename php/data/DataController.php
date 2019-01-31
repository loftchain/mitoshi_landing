<?php

class DataController
{
    private static $dataUrl = 'https://investor.mitoshi.io/api/data';

    public static function get()
    {
        $data = json_decode(file_get_contents(self::$dataUrl), true);
        $roundName = $data['roundName'];
        $roundName = explode('-', $roundName);
        $roundName = implode(' ', $roundName);
        $data['roundName'] = $roundName;

        return $data;
    }
}
