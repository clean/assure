<?php
namespace Assure;

class ArrayOfStrings
{
    public function assure(&$value)
    {
        if (is_scalar($value)) {
            $value = array($value);
        } else if ($value instanceof \stdClass) {
            $value = (array)$value;
        }

        foreach ($value as $key => $el) {
            if (!is_string($el)) {
                throw new \InvalidArgumentException('Invalid type given');
            }
        }
    }
}
