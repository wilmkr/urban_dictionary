<?php

namespace Wilson;

use Exception;
use Wilson\UrbanWords;

class Crud
{
    public static function create($newEntry)
    {
        if(!(is_array($newEntry))) {
            throw new Exception('Error processing request. $newEntry is not an array.');
        }
        array_push(UrbanWords::$data, $newEntry);
        return $newEntry;
    }

    public static function read()
    {
        return UrbanWords::$data;
    }

    public static function update($word, $newMeaning)
    {
        if(!(is_string($word)) || $word == null) {
            throw new  Exception('Error Processing Request; $word is not a valid string.');
        }
        else if(!(is_string($newMeaning)) || $word == null) {
            throw new Exception('Error processing request; $newMeaning is not a valid string.');
        }
        else {
            foreach(UrbanWords::$data as &$value) {
                if($value['slang'] === $word) {
                    $value['description'] = $newMeaning;
                    break;
                }
            }
        }
    }

    public static function delete($index)
    {
        if(!(is_int($index))) {
            throw new Exception('Error processing request; $index in not an integer.');
        }
        array_splice(UrbanWords::$data, $index, 1);
        return $index;
    }
}