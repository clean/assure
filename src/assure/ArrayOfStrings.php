<?php
namespace Assure;

class ArrayOfStrings
{
    public function assure(&$value)
    {
        if (!$value) {
            throw new \InvalidArgumentException('Empty value given');
        }

        if (is_scalar($value)) {
            $value = array($value);
        } elseif ($value instanceof \stdClass) {
            $value = (array)$value;
        }

        foreach ($value as $key => $el) {
            if (!is_string($el)) {
                throw new \InvalidArgumentException('Invalid type given');
            }
        }
    }
}
