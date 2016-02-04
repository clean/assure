arrayOfIntegers
===============

  Ensure that variable is an array with elements that can be treated as integers.
  Each element of array is validated and converted to int on success.

  Correct:

    .. code::

      assure('arrayOfIntegers', $x = 1);            // $x => [1]
      assure('arrayOfIntegers', $x = [1,2]);        // $x => [1,2]
      assure('arrayOfIntegers', $x = (object)[1,2]) // $x => [1,2]

  Incorect:

    .. code::

      assure('arrayOfIntegers', $x = []);
      assure('arrayOfIntegers', $x = [null]);
      assure('arrayOfIntegers', $x = ['a']);
      assure('arrayOfIntegers', $x = [1,'a']);
      assure('arrayOfIntegers', $x = (object)[1,'a']);

    All above method calls will throw ``\InvalidArgumentException``
  
