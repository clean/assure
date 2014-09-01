<?php
namespace Assure;

class Float
{
    public function assure(&$value)
    {
        if (is_float($value)) {
            return;
        }

        $float = filter_var($value, FILTER_VALIDATE_FLOAT);

        if (false === $float) {
            throw new \InvalidArgumentException('invalid type given');
        }

        $value = $float;
    }
}
