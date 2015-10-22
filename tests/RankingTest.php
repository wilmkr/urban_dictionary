<?php

namespace Wilson\tests;

use Wilson\Ranking;
use PHPUnit_Framework_TestCase;

class RankingTest extends PHPUnit_Framework_TestCase
{
    /**
     *test that rank() method in Ranking class returns an array and actually ranks the words in a sentence
     */
    public function testRank()
    {
        $sampleSentence = "The house is really really beautiful.";
        $expectedArray = [
            "really" => 2,
            "beautiful" => 1,
            "is" => 1,
            "house" => 1,
            "The" => 1
        ];

        $this->assertInternalType('array', Ranking::rank($sampleSentence));
        $this->assertEquals($expectedArray, Ranking::rank($sampleSentence));
    }

    /**
     * test that countOccurrence() method in ranking class returns the correct type and value
     */
    public function testCountOccurrence()
    {
        $sampleArray = ["one", "two", "three", "three"];

        $this->assertInternalType('integer', Ranking::countOccurrence($sampleArray, "three"));
        $this->assertEquals(2, Ranking::countOccurrence($sampleArray, "three"));
    }
}