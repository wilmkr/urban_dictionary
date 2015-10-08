<?php

namespace Wilson;

use Exception;
use Wilson\UrbanWords;

class Crud
{
    /**
     * function to add a new word to the data array in UrbanWords class
     * @param  array $newEntry, an array containing a word, meaning, and example usage
     * @return array
     */
    public static function create($newEntry)
    {
        if(!(is_array($newEntry))) {
            throw new Exception('Error processing request. $newEntry is not an array.');
        }
        array_push(UrbanWords::$data, $newEntry);
        return $newEntry;
    }

    /**
     * function to read words from the data array in UrbanWords class
     * @return array
     */
    public static function read()
    {
        return UrbanWords::$data;
    }

    /**
     * function updates the meaning of words in the data array in UrbanWords class
     * @param  string $word
     * @param  string $newMeaning
     */
    public static function update($word, $newMeaning)
    {
        if (!(is_string($word)) || $word == null) {
            throw new  Exception('Error Processing Request; $word is not a valid string.');
        } else if(!(is_string($newMeaning)) || $word == null) {
            throw new Exception('Error processing request; $newMeaning is not a valid string.');
        } else {
            foreach(UrbanWords::$data as &$value) {
                if($value['slang'] === $word) {
                    $value['description'] = $newMeaning;
                    break;
                }
            }
        }
    }

    /**
     * function deletes words from the data array in UrbanWords class
     * @param  integer $index
     * @return integer $index
     */
    public static function delete($index)
    {
        if(!(is_int($index))) {
            throw new Exception('Error processing request; $index in not an integer.');
        }
        array_splice(UrbanWords::$data, $index, 1);
        return $index;
    }
}