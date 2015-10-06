<?php

namespace Wilson;

use Wilson\UrbanWords;

class Crud
{
    public static function create($newEntry)
    {
        array_push(UrbanWords::$data, $newEntry);
    }

    public function read()
    {

    }

    public function update()
    {

    }

    public function delete()
    {

    }
}