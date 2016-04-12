<?php namespace Assure;

class SortedArrayCommand
{
    public function assure(&$value)
    {
        if (!is_array($value)) {
            throw new \InvalidArgumentException('value must be array');
        }

        sort($value);
    }
}
