<?php namespace Assure;

class CommaSeparatedStringsCommand
{
    public function assure(&$value)
    {
        if (! (is_scalar($value) && $value !== '')) {
            throw new \InvalidArgumentException('invalid type given');
        }

        $value = explode(',', trim($value, ','));

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
