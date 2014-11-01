<?php
namespace Assure;

class Null
{
    public function assure(&$value)
    {
        if ($value !== null) {
            throw new \InvalidArgumentException('Value must be null');
        }
    }
}
