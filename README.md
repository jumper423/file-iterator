File Iterator
=============
[![Build Status](https://travis-ci.org/jumper423/file-iterator.svg?branch=master)](https://travis-ci.org/jumper423/file-iterator)
[![PHP version](https://badge.fury.io/ph/jumper423%2Ffile-iterator.svg)](https://badge.fury.io/ph/jumper423%2Ffile-iterator)


Installation
----------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist jumper423/file-iterator
```

or add

```json
"jumper423/yfile-iterator": "*"
```

to the `require` section of your composer.json.

Usage & Documentation
------------
```php
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
if ($fileIterator->valid()) {
    ...
}
```

## Tests
```
vendor/bin/phpunit 
```
