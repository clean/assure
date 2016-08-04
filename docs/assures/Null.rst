Null
====

  Ensure that variable has null value assigned

  Correct:

    .. code::
      
      assure($x = null, 'null');

  Incorect:

    .. code::

      assure($x = 1, 'null');
      assure($x = false, 'null');
      assure($x = true, 'null');
      assure($x = '', 'null');
      assure($x = [], 'null');

    All above values will throw ``\InvalidArgumentException``
  
