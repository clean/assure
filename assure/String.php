<?php
namespace Assure;

class String
{
    public function assure(&$value)
    {
        if (is_string($value)) {
            return;
        }

        if (is_object($value)) {
            method_exists($value, '__toString');
            $value = (string)$value;
        }

        throw new \InvalidArgumentException('invalid type given');
    }
}
