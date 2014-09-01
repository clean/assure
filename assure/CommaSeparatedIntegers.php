<?php
namespace Assure;

class CommaSeparatedIntegers
{
    public function assure(&$value)
    {
        if (is_null($value) || $value === '') {
            throw new \InvalidArgumentException('invalid type given');
        }

        if (strpos($value, ',')) {
            $value = explode(',', $value);
        } else {
            $value = array($value);
        }

        foreach ($value as $key => $el) {
            $el = filter_var($el, FILTER_VALIDATE_INT);
            if (false === $el) {
                throw new \InvalidArgumentException('invalid type given');
            }
            $value[$key] = $el;
        }
    }
}
