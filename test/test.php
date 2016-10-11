<?php

require_once __DIR__ . "/../vendor/autoload.php";

$fileIterator = new \jumper423\FileIterator(__DIR__ . '/file');
$fileIterator->rewind();
$fileIterator->next();
$fileIterator->next();
$fileIterator->seek(3);
$fileIterator->next();
echo $fileIterator->current();
$fileIterator->next();
echo $fileIterator->current();
$fileIterator->seek(9);
$fileIterator->next();
$fileIterator->next();
$fileIterator->next();
echo $fileIterator->valid() ? 'true' : 'false' . PHP_EOL;