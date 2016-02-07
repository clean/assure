CommaSeparatedIntegers
======================

  Ensure that variable is string with comma separated integers and transform it to array of integers on success

  Correct:

    .. code::

      assure($x = '1,2,3,4', 'commaSeparatedIntegers'); // $x => [1,2,3,4]
      assure($x = '1', 'commaSeparatedIntegers');       // $x => [1]
      assure($x = '1,', 'commaSeparatedIntegers');      // $x => [1]
      assure($x = ',1', 'commaSeparatedIntegers');      // $x => [1]
      assure($x = 1, 'commaSeparatedIntegers');         // $x => [1]
      assure($x = 0, 'commaSeparatedIntegers');         // $x => [0]
      assure($x = '0', 'commaSeparatedIntegers');       // $x => [0]

  Incorect:

    .. code::

      assure($x = [], 'commaSeparatedIntegers');
      assure($x = null, 'commaSeparatedIntegers');
      assure($x = '', 'commaSeparatedIntegers');
      assure($x = 'a,2,3,4', 'commaSeparatedIntegers');

    All above method calls will throw ``\InvalidArgumentException``
  
