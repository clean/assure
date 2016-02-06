Object
======

  Ensure that variable is an object.
  Associative array will be transformed automatcially to stdClass.

  Correct:

    .. code::
      
      assure('object', $x = new stdClass);
      assure('object', $x = new SomeObject);
      assure('object', $x = ['x'=> 10, 'y'=20]);

  Incorect:

    .. code::

      assure('null', $x = 1);
      assure('null', $x = false);
      assure('null', $x = true);
      assure('null', $x = '');
      assure('null', $x = []);

    All above values will throw ``\InvalidArgumentException``
  
