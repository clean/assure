<?php
namespace Assure;

class Positive
{
    public function assure(&$value)
    {
        if ($value <= 0) {
            throw new \InvalidArgumentException('Value must be positive');
        }
    }
}
