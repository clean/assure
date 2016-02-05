Date
====

  Validate if variable is a string that can be transformed to timestamp,
  and converted it to timestamp on success.

  Correct:

    .. code::

      '1983-02-02'
      '12/15/1990'
      'now'
      '10 September 2000'


  Incorect:

    .. code::

      '2',
      '15/11/1990',
      'sometext',
      '-',

    All above will throw ``\InvalidArgumentException``
  
