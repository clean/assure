Object
======

  Ensure that variable is an object.
  Associative array will be transformed automatcially to stdClass.

  Correct:

    .. code::
      
      assure($x = new stdClass, 'object');
      assure($x = new SomeObject, 'object');
      assure($x = ['x'=> 10, 'y'=20], 'object');

  Incorect:

    .. code::

      assure($x = 1, 'object');
      assure($x = false, 'object');
      assure($x = true, 'object');
      assure($x = '', 'object');
      assure($x = [], 'object');

    All above values will throw ``\InvalidArgumentException``
  
