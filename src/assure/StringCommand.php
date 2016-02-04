<?php namespace Assure;

class StringCommand
{
    public function assure(&$value)
    {
        if (is_scalar($value)) {
            $value = (string)$value;
            return;
        }

        if (is_object($value)) {
            if (method_exists($value, '__toString')) {
                $value = (string)$value;
                return;
            }
        }

        throw new \InvalidArgumentException(sprintf("Expected: string, Given: %s", gettype($value)));
    }
}
