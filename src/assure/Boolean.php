<?php
namespace Assure;

class Boolean
{
    public function assure(&$value)
    {
        if (is_bool($value)) {
            return;
        }

        $bool = filter_var($value, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE);

        if (null === $bool) {
            throw new \InvalidArgumentException('invalid type given');
        }

        $value = $bool;
    }
}
