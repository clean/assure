CommaSeparatedStrings
=====================

  Ensure that variable is a string with comma separated strings inside and transform it to array of strings on success

  Correct:

    .. code::

      assure($x = '0', 'commaSeparatedStrings');       // $x => ['0']
      assure($x = 'a', 'commaSeparatedStrings');       // $x => ['a']
      assure($x = 'a,', 'commaSeparatedStrings');      // $x => ['a']
      assure($x = ',a', 'commaSeparatedStrings');      // $x => ['a']
      assure($x = ',a,b', 'commaSeparatedStrings');    // $x => ['a', 'b']
      assure($x = '1,2,3,4', 'commaSeparatedStrings'); // $x => ['1','2','3','4']
      assure($x = 'a,b,c', 'commaSeparatedStrings');   // $x => ['a', 'b', 'c']
      assure($x = '1#),#$%', 'commaSeparatedStrings'); // $x => ['1#)', '#$%']

  Incorect:

    .. code::

      assure($x = '[]', 'commaSeparatedStrings');
      assure($x = '', 'commaSeparatedStrings');
      assure($x = null, 'commaSeparatedStrings');

    All above method calls will throw ``\InvalidArgumentException``
  
