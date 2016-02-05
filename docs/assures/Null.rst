Null
====

  Ensure that variable has null value assigned

  Correct:

    .. code::
      
      assure('null', $x = null);

  Incorect:

    .. code::

      assure('null', $x = 1);
      assure('null', $x = false);
      assure('null', $x = true);
      assure('null', $x = '');
      assure('null', $x = []);

    All above values will throw ``\InvalidArgumentException``
  
