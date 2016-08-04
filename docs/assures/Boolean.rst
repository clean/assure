Boolean
=======

  Ensure that variable has value that can be treated as bool value.
  Variable is validated and converted to bool value on success.

  Correct:

    .. code::

      assure($x = true, 'boolean');  // $x => true
      assure($x = false, 'boolean');  // $x => false
      assure($x = 1, 'boolean');  // $x => true
      assure($x = 0, 'boolean');  // $x => false
      assure($x = 'true', 'boolean');  // $x => true
      assure($x = 'false', 'boolean');  // $x => false
      assure($x = 'TRUE', 'boolean');  // $x => true
      assure($x = 'FALSE', 'boolean');  // $x => false
      assure($x = 'True', 'boolean');  // $x => true
      assure($x = 'False', 'boolean');  // $x => false
      assure($x = 'on', 'boolean');  // $x => true
      assure($x = 'off', 'boolean');  // $x => false
      assure($x = 'ON', 'boolean');  // $x => true
      assure($x = 'OFF', 'boolean');  // $x => false
      assure($x = 'YES', 'boolean');  // $x => true
      assure($x = 'NO', 'boolean');  // $x => false
      assure($x = 'yes', 'boolean');  // $x => true
      assure($x = 'no', 'boolean');  // $x => false
      assure($x = 'falsE', 'boolean');  // $x => true
      assure($x = 'truE', 'boolean');  // $x => false

  Incorect:

    .. code::

      assure($x = '2', 'boolean');
      assure($x = 2, 'boolean');
      assure($x = new \stdClass, 'boolean');
      assure($x = 'a', 'boolean');
      assure($x = 'one', 'boolean');

    All above method calls will throw ``\InvalidArgumentException``
  
