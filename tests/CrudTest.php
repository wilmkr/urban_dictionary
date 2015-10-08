<?php

namespace Wilson\tests;

use Wilson\Crud;
use PHPUnit_Framework_TestCase;

class CrudTest extends PHPUnit_Framework_TestCase
{
    /**
     * test that the parameter passed to create() in Crud class is an array
     * @return array
     */
    public function testCreate()
    {
        $this->assertInternalType('array', Crud::create(["key"=>"value"]));
    }

    /**
     * test that the read function in Crud class returns an array
     * @return array
     */
    public function testRead()
    {
        $this->assertInternalType('array', Crud::read());
    }

    /**
     * test that the first parameter to update method in Crud class is an integer, and the second is an array
     * @return
     */
    public function testUpdate()
    {

    }

    /**
     * test that the index passed to delete() in Crud class is an integer
     * @return integer
     */
    public function testDelete()
    {
        $this->assertInternalType('integer', Crud::delete(0));
    }
}