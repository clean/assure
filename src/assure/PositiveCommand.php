<?php namespace Assure;

class PositiveCommand
{
    public function assure(&$value)
    {
        if ($value <= 0) {
            throw new \InvalidArgumentException('Value must be positive');
        }
    }
}
