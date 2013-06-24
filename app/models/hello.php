<?php

class Hello extends AppModel
{
    public static function getAllThreads()
    {
        $db = DB::conn();
        $rows = $db->rows('SELECT * FROM thread');
        return $rows ? $rows : false;
    }
}