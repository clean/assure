<?php
namespace Assure;

class SortDirection
{
    public function assure(&$value)
    {
        if (!is_string($value)) {
            throw new \InvalidArgumentException('Invalid type given');
        }

        $value = strtoupper($value);

        if (in_array($value, array('ASC', 'DESC'))) {
            return;
        }

        throw new \InvalidArgumentException('Invalid sort direction. Should be one of "ASC" or "DESC"');
    }
}
