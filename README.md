# clean/assure

[![Build Status](https://travis-ci.org/clean/assure.svg?branch=2.0.0)](https://travis-ci.org/clean/assure)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/clean/assure/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/clean/assure/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/clean/assure/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/clean/assure/?branch=master)

Data correction and validation tools.

## Installation

via [Composer](https://packagist.org/packages/clean/assure):

```json
"require": {
  "clean/assure": "2.*"
}
```

## Usage example

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
