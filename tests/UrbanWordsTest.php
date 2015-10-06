<?php

namespace Wilson\tests;

use Wilson\UrbanWords;
use PHPUnit_Framework_TestCase;

class UrbanWordsTest extends PHPUnit_Framework_TestCase
{
    public function testDataArray()
    {
        $this->assertContainsOnly('array', UrbanWords::$data);
    }
}