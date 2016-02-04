<?php namespace Assure;

class BooleanCommand
{
    public function assure(&$value)
    {
        if (is_bool($value)) {
            return;
        }

        if (is_object($value)) {
            throw new \InvalidArgumentException('Object cannot be converted to boolean value');
        }

        $bool = filter_var($value, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE);

        if (null === $bool) {
            throw new \InvalidArgumentException(sprintf('Invalid type given %s', gettype($value)));
        }

        $value = $bool;
    }
}
