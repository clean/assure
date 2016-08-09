# clean/assure

[![Build Status](https://travis-ci.org/clean/assure.svg?branch=master)](https://travis-ci.org/clean/assure)
[![Code Climate](https://codeclimate.com/github/clean/assure/badges/gpa.svg)](https://codeclimate.com/github/clean/assure)
[![Test Coverage](https://codeclimate.com/github/clean/assure/badges/coverage.svg)](https://codeclimate.com/github/clean/assure/coverage)
[![Issue Count](https://codeclimate.com/github/clean/assure/badges/issue_count.svg)](https://codeclimate.com/github/clean/assure)

current version: [3.0.0](CHANGELOG.md)

This package extends global namespace with assure method than can be used to correct and validate mixed data types.

Mainly used to support duck typing of primitive types in function parameters to simplify interface usage eg.:

```php
class Foo
{
    public function filterById($id)
    {
        assure($name, ['arrayOfIntegers']);
        // after assure we can trust that name is an array of integers
        // otherwise exception will be raised
    }
}

$foo = new Foo();
$foo->filterById(1)
$foo->filterById('1')
$foo->filterById(['1', 2])
```

## Installation

via [Composer](https://packagist.org/packages/clean/assure)

## Example of Usage

```php 
// if value is not integer and cannot be transform to integer assure with throw exception
// correct values: '1', 1, 1.3
// invalid values: 'a', NULL, false, array()
assure($value, 'integer');

// if not integer OR string with integers separated by commas assure will throw exception
// correct values: '1', '1,2,3,4,5';
// invalid values: 'a', '1,2,a,4,b';
assure($value, ['integer', 'commaSeparatedIntegers']); 
```

## Documentation

http://cleanassure.readthedocs.org
