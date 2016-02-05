Float
=====

  Ensure that variable has value that can be treated as float value.
  Variable is validated and converted to float value on success.

  Correct:

    .. code::

      1.1 => 1.1
      '1.1' => 1.1
      1 => 1.0
      '1' => 1.0

  Incorect:

    .. code::

      null 
      'one'
      false
      true
      []

    All above values will throw ``\InvalidArgumentException``
  
