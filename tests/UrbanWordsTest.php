<?php

namespace Wilson\tests;

use Wilson\UrbanWords;
use PHPUnit_Framework_TestCase;

class UrbanWordsTest extends PHPUnit_Framework_TestCase
{
    /**
     * tests that the $data variable in UrbanWords class is an array
     * @return [type] [description]
     */
    public function testDataArray()
    {
        $this->assertContainsOnly('array', UrbanWords::$data);
    }
}