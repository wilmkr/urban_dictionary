<?php

namespace Wilson\tests;

use Wilson\Crud;
use PHPUnit_Framework_TestCase;

class CrudTest extends PHPUnit_Framework_TestCase
{
    private $testArray = ["slang"=>"Tush", "description"=>"when something is nice and attractive", "sample-sentence"=>"The house is tush!"];

    /**
     * test that the parameter passed to create() in Crud class is an array
     */
    public function testCreate()
    {
        $this->assertInternalType('array', Crud::create($this->testArray));
    }

    /**
     * test that when a single word is read from the array, it actully has a meaning and sample sentence
     */
    public function testFind()
    {
        Crud::create($this->testArray);

        $this->assertArrayHasKey('slang', Crud::find($this->testArray["slang"]));
        $this->assertArrayHasKey('description', Crud::find($this->testArray["slang"]));
        $this->assertArrayHasKey('sample-sentence', Crud::find($this->testArray["slang"]));
    }

    /**
     * test that the read function in Crud class returns an array
     */
    public function testGetAll()
    {
        $this->assertInternalType('array', Crud::getAll());
    }

    /**
     * test that a word, its meaning, and sample sentence can be updated in the data array
     */
    public function testUpdate()
    {
        Crud::create($this->testArray);

        $this->assertTrue(Crud::update($this->testArray["slang"], "description", "bla bla bla"));
        $this->assertTrue(Crud::update($this->testArray["slang"], "sample-sentence", "bla bla bla"));
        $this->assertTrue(Crud::update($this->testArray["slang"], "slang", "bla bla bla"));
    }

    /**
     * test that a word can actually be deleted from the data array
     */
    public function testDelete()
    {
        Crud::create($this->testArray);

        $this->assertTrue(Crud::delete($this->testArray["slang"]));
    }
}