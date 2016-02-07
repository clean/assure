ArrayOfStrings
==============

  Ensure that variable is an array with elements that can be treated as string.
  Each element of array is validated and converted to string on success.

  Correct:

    .. code::

      assure($x = 'a', 'arrayOfStrings');                     // $x = ['a']
      assure($x = 1, 'arrayOfStrings');                       // $x = ['1']
      assure($x = [1, 'two'], 'arrayOfStrings');          // $x = ['1', 'two']
      assure($x = (object)['one', 'two'], 'arrayOfStrings');  // $x = ['one', 'two']

  Incorect:

    .. code::

      assure($x = [], 'arrayOfStrings');
      assure($x = [null], 'arrayOfStrings');
      assure($x = 1, 'arrayOfStrings');
      assure($x = [1,'a'], 'arrayOfStrings');
      assure($x = (object)[1,'a'], 'arrayOfStrings');

    All above method calls will throw ``\InvalidArgumentException``
  
