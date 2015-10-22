<?php

namespace Wilson;

use Exception;

class Ranking
{
    /**
     * This function ranks words in a string based on the number of occurrence in the string
     * @return array
     */
    public static function rank($string)
    {
        if(! is_string($string) || is_null($string)) {
            throw new  Exception('Error Processing Request; $string is not a valid string.');
        }

        $stringArray = str_word_count($string, 1);
        $dynamicArray = [];

        for($x = 0; $x < count($stringArray); $x++) {
            $dynamicArray[$stringArray[$x]] = Ranking::countOccurrence($stringArray, $stringArray[$x]);
        }

        array_multisort($dynamicArray, SORT_DESC);

        return $dynamicArray;
    }

    /**
     * function counts the number of occurrence of a word in the supplied array
     * @return integer
     */
    public static function countOccurrence($stringArray, $word)
    {
        return count(array_keys($stringArray, $word, false));
    }
}