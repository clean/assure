ArrayOfIntegers
===============

  Ensure that variable is an array with elements that can be treated as integers.
  Each element of array is validated and converted to int on success.

  Correct:

    .. code::

      assure($x = 1, 'arrayOfIntegers');                  // $x => [1]
      assure($x = [1,2], 'arrayOfIntegers');              // $x => [1,2]
      assure($x = (object)[1,2], 'arrayOfIntegers')[1,2]) // $x => [1,2]

  Incorect:

    .. code::

      assure($x = [], 'arrayOfIntegers');
      assure($x = [null], 'arrayOfIntegers');
      assure($x = ['a'], 'arrayOfIntegers');
      assure($x = [1,'a'], 'arrayOfIntegers');
      assure($x = (object)[1,'a'], 'arrayOfIntegers');

    All above method calls will throw ``\InvalidArgumentException``
  
