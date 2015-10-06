<?php

namespace Wilson;

use Wilson\UrbanWords;

class Crud
{
    public static function create($newEntry)
    {
        array_push(UrbanWords::$data, $newEntry);
    }

    public static function read()
    {
        return UrbanWords::$data;
    }

    public static function update($word, $newMeaning)
    {
        foreach(UrbanWords::$data as &$value) {
            if($value['slang'] === $word) {
                $value['description'] = $newMeaning;
                break;
            }
        }
    }

    public static function delete($index)
    {
        array_splice(UrbanWords::$data, $index, 1);
    }
}