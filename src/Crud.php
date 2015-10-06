<?php

namespace Wilson;

use Wilson\UrbanWords;

class Crud
{
    public static function create($newEntry)
    {
        //test that newEntry is an array
        array_push(UrbanWords::$data, $newEntry);
    }

    public static function read()
    {
        return UrbanWords::$data;
    }

    public static function update($index, $newEntry)
    {
        //test that index is an integer and that newEntry is an array
        UrbanWords::$data = array_splice(UrbanWords::$data, $index, 1);
    }

    public static function delete()
    {
        //test that index is an integer and that newEntry is an array
        UrbanWords::$data = array_splice(UrbanWords::$data, $index, 1);
    }
}