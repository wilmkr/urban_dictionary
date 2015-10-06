<?php

namespace Wilson\tests;

use Wilson\Crud;
use PHPUnit_Framework_TestCase;

class CrudTest extends PHPUnit_Framework_TestCase
{
    public function testCreate()
    {
        //test that the parameter passed to create() is an array
        $this->assertInternalType('array', Crud::create(["key"=>"value"]));
    }

    public function testRead()
    {
        //test that the read function returns an array
        $this->assertInternalType('array', Crud::read());
    }

    public function testUpdate()
    {
        //test that the first parameter to update method is an integer, and the second is an array
    }

    public function testDelete()
    {
        //test that the index passed to delete() is an integer
        $this->assertInternalType('integer', Crud::delete(0));
    }
}