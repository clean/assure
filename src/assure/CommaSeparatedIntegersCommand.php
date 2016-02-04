<?php
namespace Assure;

class CommaSeparatedIntegersCommand
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
                $el = filter_var($el, FILTER_VALIDATE_INT);
                if (false === $el) {
                    throw new \InvalidArgumentException('invalid type given');
                }
            }
        );
    }
}
