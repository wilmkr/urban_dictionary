<?php

namespace Wilson\tests;

use Wilson\Ranking;
use PHPUnit_Framework_TestCase;

class RankingTest extends PHPUnit_Framework_TestCase
{
    /**
     *test that rank() method in Ranking class returns an array
     * @return array
     */
    public function testRank()
    {
        $this->assertInternalType('array', Ranking::rank("a test string"));
    }

    /**
     * test that countOccurrence() method in ranking class returns the correct type and value
     * @return integer
     */
    // public function testCountOccurrence()
    // {
    //     $sampleArray = ["one", "two", "three", "three"];
    //     $this->assertInternalType('integer', Ranking::countOccurrence($sampleArray, "three"));
    //     $this->assertEquals(2, Ranking::countOccurrence($sampleArray, "three"));
    // }
}