clean/assure
============

|Build Status| |Code Climate| |Test Coverage| |Issue Count|

Data correction and validation tools for PHP
--------------------------------------------

This package extends global namespace with ``assure`` method than can be used to correct and validate mixed data types.

Example Of Usage
................

.. code:: php

  // if value is not integer and cannot be transform to integer assure will throw an exception
  // correct values: '1', 1, 1.3
  // invalid values: 'a', NULL, false, array()
  assure($value, 'integer');

  // if not integer OR string with integers separated by commas assure will throw an exception
  // correct values: '1', '1,2,3,4,5';
  // invalid values: 'a', '1,2,a,4,b';
  assure($value, ['integer', 'commaSeparatedIntegers']); 

Installation
............

via `Composer`_: ``composer require clean/assure``


.. toctree::
   :caption: Assure types
   :maxdepth: 2
   :glob:

   assures/*


.. |Build Status| image:: https://travis-ci.org/clean/assure.svg?branch=master
.. |Code Climate| image:: https://codeclimate.com/github/clean/assure/badges/gpa.svg
.. |Test Coverage| image:: https://codeclimate.com/github/clean/assure/badges/coverage.svg
.. |Issue Count| image:: https://codeclimate.com/github/clean/assure/badges/issue_count.svg
.. _Composer: https://packagist.org/packages/clean/assure

