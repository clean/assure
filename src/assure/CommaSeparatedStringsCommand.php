<?php namespace Assure;

class CommaSeparatedStringsCommand
{
    public function assure(&$value)
    {
        if (! (is_scalar($value) && $value !== '')) {
            throw new \InvalidArgumentException('invalid type given');
        }

        $value = explode(',', trim($value, ','));
    }
}
