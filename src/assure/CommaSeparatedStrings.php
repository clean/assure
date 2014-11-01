<?php
namespace Assure;

class CommaSeparatedStrings
{
    public function assure(&$value)
    {
        if ($value == '') {
            throw new \InvalidArgumentException('Invalid type given');
        }

        if (strpos($value, ',')) {
            $value = explode(',', $value);
        } else {
            $value = array($value);
        }

        foreach ($value as $key => $el) {
            if (!is_string($el)) {
                throw new \InvalidArgumentException('Invalid type given');
            }
            $value[$key] = $el;
        }
    }
}
