<?php
namespace Assure;

class IsNotOutOfRangeDate
{
    public function assure(&$value)
    {
        if (null === $value) {
            throw new \InvalidArgumentException(sprintf("Supplied date cannot be null", $value));
        }

        $baseDate = \Goal_Date::now();
        $baseDate->add(5, \Zend_Date::YEAR);

        if ($baseDate->isEarlier($value)) {
            throw new \InvalidArgumentException(sprintf("Supplied date '%s' is out of range", $value));
        }
    }
}
