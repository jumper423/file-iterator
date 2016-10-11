<?php

class FileTest extends PHPUnit_Framework_TestCase
{
    public function testInstance()
    {
        $file1 = __DIR__ . '/files/file1';
        $instance = \jumper423\File::getInstance($file1);
        return $instance;
    }

    /**
     * @param $instance \jumper423\File
     * @depends testInstance
     */
    public function testGetCount($instance)
    {
        $this->assertEquals(10, $instance->getCount());
    }

    /**
     * @param $instance \jumper423\File
     * @depends testInstance
     */
    public function testGetString($instance)
    {
        $this->assertEquals('11111111111111', $instance->getString(0));
        $this->assertEquals('22222222222', $instance->getString(1));
        $this->assertEquals('33333333333333333333', $instance->getString(2));

    }
}