Integer
=======

  Ensure that variable has value that can be treated as integer value.
  Variable is validated and converted to integer on success.

  Correct:

    .. code::

      1 => 1
      '1' => 1
      '-1' => -1

  Incorect:

    .. code::

      null 
      1.1
      'one'
      false
      true
      []

    All above values will throw ``\InvalidArgumentException``
  
