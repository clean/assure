<?php
namespace Assure;

class ArrayOfIntegers
{
    public function assure(&$value)
    {
        if (!$value) {
            throw new \InvalidArgumentException('Empty array');
        }

        if (is_scalar($value)) {
            $value = array($value);
        } elseif ($value instanceof \stdClass) {
            $value = (array)$value;
        }

        foreach ($value as $key => $el) {
            $el = filter_var($el, FILTER_VALIDATE_INT);
            if (false === $el) {
                throw new \InvalidArgumentException('value must be array of integers');
            }
            $value[$key] = $el;
        }
    }
}
