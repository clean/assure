Float
=====

  Ensure that variable has value that can be treated as float value.
  Variable is validated and converted to float value on success.

  Correct:

    .. code::

      assure($x = 1.1, 'float'); // $x => 1.1
      assure($x = '1.1', 'float'); // $x => 1.1
      assure($x = 1, 'float'); // $x => 1.0
      assure($x = '1', 'float'); // $x => 1.0

  Incorect:

    .. code::

      assure($x = null, 'float');
      assure($x = 'one', 'float');
      assure($x = false, 'float');
      assure($x = true, 'float');
      assure($x = [], 'float');
      assure($x = <object>, 'float');

    All above values will throw ``\InvalidArgumentException``
  
