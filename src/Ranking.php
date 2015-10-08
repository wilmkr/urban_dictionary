<?php

namespace Wilson;

class Ranking
{
    public static function rank($string)
    {
        $array = str_word_count($string, 1);
        $dynamicArray = [];

        for($x = 0; $x < count($array); $x++) {
            $dynamicArray[$array[$x]] = Ranking::countOccurrence($array, $array[$x]);
        }

        array_multisort($dynamicArray, SORT_DESC);
        return $dynamicArray;
    }

    public static function countOccurrence($array, $word)
    {
        return count(array_keys($array, $word, false));
    }
}