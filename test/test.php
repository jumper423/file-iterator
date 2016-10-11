<?php

include_once "../src/File.php";
include_once "../src/FileIterator.php";

$fileIterator = new FileIterator(__DIR__ . '\file');
$fileIterator->rewind();
$fileIterator->next();
$fileIterator->next();
$fileIterator->seek(5001);
$fileIterator->next();
echo $fileIterator->current();