CommaSeparatedIntegers
======================

  Ensure that variable is string with comma separated integers and transform it to array of integers on success

  Correct:

    .. code::

      assure('commaSeparatedIntegers', $x = '1,2,3,4'); // $x => [1,2,3,4]
      assure('commaSeparatedIntegers', $x = '1');       // $x => [1]
      assure('commaSeparatedIntegers', $x = '1,');      // $x => [1]
      assure('commaSeparatedIntegers', $x = ',1');      // $x => [1]
      assure('commaSeparatedIntegers', $x = 1);         // $x => [1]
      assure('commaSeparatedIntegers', $x = 0);         // $x => [0]
      assure('commaSeparatedIntegers', $x = '0');       // $x => [0]

  Incorect:

    .. code::

      assure('commaSeparatedIntegers', $x = []);
      assure('commaSeparatedIntegers', $x = null);
      assure('commaSeparatedIntegers', $x = '');
      assure('commaSeparatedIntegers', $x = 'a,2,3,4');

    All above method calls will throw ``\InvalidArgumentException``
  
