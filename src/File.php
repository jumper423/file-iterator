<?php

namespace jumper423;

class File
{
    private static $instances = [];

    public static function getInstance(string $path)
    {
        if (!array_key_exists($path, self::$instances)) {
            self::$instances[$path] = new self($path);
        }
        return self::$instances[$path];
    }

    private $handle;
    private $strings = [];
    private $count;

    public function __construct(string $path)
    {
        $this->count = 0;
        $this->handle = fopen($path, "r");
        $this->definitionStrings();
    }

    private function definitionStrings()
    {
        while (fgets($this->handle) !== false) {
            $this->strings[] = ftell($this->handle);
            ++$this->count;
        }
    }

    public function getCount(){
        return $this->count;
    }

    public function getString(int $index) {
        if ($index >= $this->getCount()) {
            throw new Exception('Not');
        }
        if ($index === 0){
            fseek($this->handle, 0);
        } else {
            fseek($this->handle, $this->strings[$index - 1]);
        }
        return fgets($this->handle);
    }
}