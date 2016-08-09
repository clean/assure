# Changelog

## 3.0.0
  - bugfix: fatal error has been raised when unknown condition operator used eg.: `assure($value, 'integer >> 10')`
  - changed: licence type change to MIT
  - changed: commaSeparatedIntegers and commaSeparatedStrings will now accept additional formats, value can be prefixed or suffixed with comman `,` eg: `',1,2,3'` `'1,2,3,'`
  - changed: `sortedArray` assure instead of throwing exception when array is not sorted will sort it
  - change: commaSeparatedIntegers and commaSeparatedStrings will now accept additional formats, value can be prefixed or suffixed with comman `,` eg: `',1,2,3'` `'1,2,3,'`
  - removed unclear and redutant `positive` assure that could be replaced with `integer > 0` or `float > 0`
  - removed not precise `sortDirection` assure

## 2.0.2

  - bugfix: `arrayOfStrings` assure doesn't allow null value right now

## 2.0.1

  - bugfix: `arrayOfIntegers` assure doesn't allow null value right now
