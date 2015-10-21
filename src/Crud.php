<?php

namespace Wilson;

use Exception;
use Wilson\UrbanWords;

class Crud
{
    /**
     * This function adds a new word or entry to the data array in UrbanWords class
     * @param  array $newEntry. An array containing a word, its meaning, and example usage
     * @return array
     */
    public static function create($newEntry)
    {
        if(! is_array($newEntry) ) {
            throw new Exception('Error processing request. $newEntry is not an array.');
        }

        array_push(UrbanWords::$data, $newEntry);

        return $newEntry;
    }

    /**
     * This function reads the meaning and sample sentence of a single word in the data array in UrbanWords class
     * @return
     */
    public static function find($word)
    {
        $entry = [];
        $index = 0;

        foreach (UrbanWords::$data as $value) {
            if(strtolower($value["slang"]) == strtolower($word)) {
                $entry = UrbanWords::$data[$index];
                break;
            }
            $index++;
        }

        return $entry;
    }

    /**
     * This function reads the meanings and sample sentences of all words in the data array in UrbanWords class
     * @return array
     */
    public static function getAll()
    {
        return UrbanWords::$data;
    }

    /**
     * This function updates either a word, its meaning, or its example sentence in the data array in UrbanWords class
     * @return boolean
     */
    public static function update($word, $fieldToUpdate, $newValue)
    {
       $entryUpdated = false;

        if(! is_string($word) || $word == null || $word == "") {
            throw new  Exception('Error Processing Request; $word is not a valid string.');
        }

        if(! is_string($newValue) || $newValue == null || $newValue == "") {
            throw new  Exception('Error Processing Request; $newValue is not a valid string.');
        }

        foreach(UrbanWords::$data as &$value) {
            if(strtolower($value['slang']) === strtolower($word)) {
                $value[$fieldToUpdate] = $newValue;
                $entryUpdated = true;
                break;
            }
        }

        return $entryUpdated;
    }

    /**
     * This function deletes words from the data array in UrbanWords class
     * @return boolean
     */
    public static function delete($word)
    {
        $entryDeleted = false;
        $index = 0;

        foreach (UrbanWords::$data as $value) {
            if(strtolower($value["slang"]) == strtolower($word)) {
                array_splice(UrbanWords::$data, $index, 1);
                $entryDeleted = true;
                break;
            }
            $index++;
        }

        return $entryDeleted;
    }
}