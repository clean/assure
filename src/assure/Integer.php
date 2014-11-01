<?php
namespace Assure;

class Integer
{
    public function assure(&$value, $operator, $operand)
    {
        if (!is_int($value)) {
            $int = filter_var($value, FILTER_VALIDATE_INT);

            if (false === $int) {
                throw new \InvalidArgumentException('invalid type given');
            }

            $value = $int;
        }

        if ($operator && !assure_check_condition($value, $operator, $operand)) {
            throw new \InvalidArgumentException("Value should be $operator $operand");
        }
    }
}
