<?php namespace Assure;

class NullCommand
{
    public function assure(&$value)
    {
        if ($value !== null) {
            throw new \InvalidArgumentException('Value must be null');
        }
    }
}
