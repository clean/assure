<?php
namespace Assure;

class CommaSeparatedStrings
{
    public function assure(&$value)
    {
        if (is_scalar($value) && $value !== '') {
            $value = explode(',', trim($value, ','));
        } else {
            throw new \InvalidArgumentException('invalid type given');
        }

        array_walk(
            $value,
            function (&$el) {
                if (!is_string($el)) {
                    throw new \InvalidArgumentException('invalid type given');
                }
            }
        );
    }
}
