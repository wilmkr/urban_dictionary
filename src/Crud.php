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

    public function update()
    {

    }

    public function delete()
    {

    }
}