<?php

class FileIteratorTest extends PHPUnit_Framework_TestCase
{
    public function testInstance()
    {
        $file1 = __DIR__ . '/files/file1';
        $instance = new \jumper423\FileIterator($file1);
        return $instance;
    }

    /**
     * @param $instance \jumper423\FileIterator
     * @depends testInstance
     */
    public function testGetKey($instance)
    {
        $instance->seek(1);
        $this->assertEquals(1, $instance->key());
        $instance->next();
        $this->assertEquals(2, $instance->key());
        $instance->rewind();
        $this->assertEquals(0, $instance->key());
        $instance->next();
        $this->assertEquals(1, $instance->key());
    }

    /**
     * @param $instance \jumper423\FileIterator
     * @depends testInstance
     */
    public function testValid($instance)
    {
        $instance->seek(1);
        $this->assertTrue($instance->valid());
        $instance->next();
        $this->assertTrue($instance->valid());
        $instance->rewind();
        $this->assertTrue($instance->valid());
        $instance->next();
        $this->assertTrue($instance->valid());
        $instance->seek(9);
        $this->assertTrue($instance->valid());
        $instance->next();
        $this->assertFalse($instance->valid());
    }
}