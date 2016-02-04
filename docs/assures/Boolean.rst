boolean
=======

  Ensure that variable has value that can be treated as bool value.
  Variable is validated and converted to bool value on success.

  Correct:

    .. code::

      true      => true
      false     => false
      1         => true
      0         => false
      "true"    => true
      "false    => false
      "TRUE"    => true
      "FALSE"   => false
      "True"    => true
      "False"   => false
      "on"      => true
      "off"     => false
      "ON"      => true
      "OFF"     => false
      "YES"     => true
      "NO"      => false
      "yes"     => true
      "no"      => false
      'falsE'   => false
      'truE'    => true


  Incorect:

    .. code::

      "2"
      2
      new \stdClass
      'a'
      'one'

    All above method calls will throw ``\InvalidArgumentException``
  
