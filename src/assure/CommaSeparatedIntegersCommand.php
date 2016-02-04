<?php
namespace Assure;

class CommaSeparatedIntegersCommand
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
                $el = filter_var($el, FILTER_VALIDATE_INT);
                if (false === $el) {
                    throw new \InvalidArgumentException('invalid type given');
                }
            }
        );
    }
}
