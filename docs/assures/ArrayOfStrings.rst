ArrayOfStrings
==============

  Ensure that variable is an array with elements that can be treated as string.
  Each element of array is validated and converted to string on success.

  Correct:

    .. code::

      assure('arrayOfStrings', $x = 'a');                     // $x = ['a']
      assure('arrayOfStrings', $x = '-');                     // $x = ['-']
      assure('arrayOfStrings', $x = ['one', 'two']);          // $x = ['one', 'two']
      assure('arrayOfStrings', $x = (object)['one', 'two']);  // $x = ['one', 'two']

  Incorect:

    .. code::

      assure('arrayOfStrings', $x = []);
      assure('arrayOfStrings', $x = [null]);
      assure('arrayOfStrings', $x = 1);
      assure('arrayOfStrings', $x = [1,'a']);
      assure('arrayOfStrings', $x = (object)[1,'a']);

    All above method calls will throw ``\InvalidArgumentException``
  
