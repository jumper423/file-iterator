<?php

require_once "../vendor/autoload.php";

$fileIterator = new \jumper423\FileIterator(__DIR__ . '\file');
$fileIterator->rewind();
$fileIterator->next();
$fileIterator->next();
$fileIterator->seek(2);
$fileIterator->next();
echo $fileIterator->current();