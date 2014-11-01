<?php
namespace Assure;

class SortedArray
{
    public function assure(&$value)
    {
        if (!is_array($value)) {
            throw new \InvalidArgumentException('value must be array');
        }

        $sorted = $value;
        sort($sorted);

        if ($sorted != $value) {
            throw new \InvalidArgumentException('array is not sorted');
        }
    }
}
