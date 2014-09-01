assure
======

Data correction and validation tools

Usage example:

```php 
// if value is not integer and cannot be transform to integer assure with throw exception
// correct values: '1', 1, 1.3
// invalid values: 'a', NULL, false, array()
assure($value, 'integer');

// if not integer OR string with integers separated by commas assure will throw exception
// correct values: '1', '1,2,3,4,5';
// invalid values: 'a', '1,2,a,4,b';
assure($value, array('integer', 'commaSeparatedIntegers')); 
```
