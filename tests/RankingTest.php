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
     * test that countOccurrence() method in ranking class returns an integer
     * @return integer
     */
    public function testCountOccurrence()
    {
        $this->assertInternalType('integer', Ranking::countOccurrence(["one","two","three"], "one two three"));
    }
}