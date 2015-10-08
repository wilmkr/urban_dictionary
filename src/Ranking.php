<?php

namespace Wilson;

use Exception;

class Ranking
{
    /**
     * function ranks words in a string based on number of occurrence in the string
     * @param  string $string
     * @return array
     */
    public static function rank($string)
    {
        if(!(is_string($string)) || $string == null) {
            throw new  Exception('Error Processing Request; $string is not a valid string.');
        }
        else {
            $array = str_word_count($string, 1);
            $dynamicArray = [];

            for($x = 0; $x < count($array); $x++) {
                $dynamicArray[$array[$x]] = Ranking::countOccurrence($array, $array[$x]);
            }

            array_multisort($dynamicArray, SORT_DESC);
            return $dynamicArray;
        }
    }

    /**
     * function counts the number of occurrence of a word in the supplied array
     * @param  array $array
     * @param  string $word
     * @return integer
     */
    public static function countOccurrence($array, $word)
    {
        return count(array_keys($array, $word, false));
    }
}