<?php
namespace Assure;

class Object
{
    public function assure(&$value)
    {
        if (is_object($value)) {
            return;
        }

        //if associative array
        if (is_array($value) && (count(array_filter(array_keys($value), 'is_string')) == count($value))) {
            $value = (object)$value;
        } else {
            throw new \InvalidArgumentException(sprintf("Invalid type given '%s', must by an object", gettype($value)));
        }
    }
}
