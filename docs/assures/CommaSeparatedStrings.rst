CommaSeparatedStrings
=====================

  Ensure that variable is a string with comma separated strings inside and transform it to array of strings on success

  Correct:

    .. code::

      assure('commaSeparatedStrings', $x = '0');       // $x => ['0']
      assure('commaSeparatedStrings', $x = 'a');       // $x => ['a']
      assure('commaSeparatedStrings', $x = 'a,');      // $x => ['a']
      assure('commaSeparatedStrings', $x = ',a');      // $x => ['a']
      assure('commaSeparatedStrings', $x = ',a,b');    // $x => ['a', 'b']
      assure('commaSeparatedStrings', $x = '1,2,3,4'); // $x => ['1','2','3','4']
      assure('commaSeparatedStrings', $x = 'a,b,c');   // $x => ['a', 'b', 'c']
      assure('commaSeparatedStrings', $x = '1#),#$%'); // $x => ['1#)', '#$%']

  Incorect:

    .. code::

      assure('commaSeparatedStrings', $x = '[]');
      assure('commaSeparatedStrings', $x = '');
      assure('commaSeparatedStrings', $x = null);

    All above method calls will throw ``\InvalidArgumentException``
  
