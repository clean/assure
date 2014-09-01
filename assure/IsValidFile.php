<?php
namespace Assure;

class IsValidFile
{
    public function assure(&$value)
    {
        if (is_file($value) && is_readable($value)) {
            return;
        }
        throw new \InvalidArgumentException(sprintf('Invalid file given: %s', $value));
    }
}
