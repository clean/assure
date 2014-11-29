<?php namespace Assure;

class Date
{
    public function assure(&$value)
    {
        if (strtotime($value) === false) {
            throw new \InvalidArgumentException(sprintf("Supplied date '%s' is invalid.", $value));
        }
    }
}
