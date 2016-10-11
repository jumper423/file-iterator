<?php

class FileIterator implements SeekableIterator
{
    private $position;

    /**
     * @var File
     */
    private $file;

    public function __construct($path)
    {
        $this->file = File::getInstance($path);
    }

    public function seek($position)
    {
        if ($position < 0 || $position >= $this->file->getCount()) {
            throw new OutOfBoundsException("invalid seek position ($position)");
        }
        $this->position = $position;
    }

    public function rewind()
    {
        $this->position = 0;
    }

    public function current()
    {
        return $this->file->getString($this->position);
    }

    public function key()
    {
        return $this->position;
    }

    public function next()
    {
        ++$this->position;
    }

    public function valid()
    {
        return $this->position >= $this->file->getCount();
    }
}