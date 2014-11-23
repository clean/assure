<?php 
namespace {

    function assure(&$value, $assures)
    {
        static $instances = [];

        $assures = (array)$assures;
        $isValid = false;
        $errors = array();

        foreach ($assures as $cmd) {
            try {
                list($name, $operator, $operand) = array_merge(explode(' ', $cmd), array(null, null));

                if (!isset($instances[$cmd])) {
                    $className = 'Assure\\' . ucfirst($name);
                    $instances[$cmd] = new $className();
                }

                $copy = $value;
                $instances[$cmd]->assure($copy, $operator, $operand);
                $value = $copy;
                $isValid = true;
            } catch (InvalidArgumentException $e) {
                $errors[] = $e->getMessage(); //remember all errors
                $isValid = ($isValid) ?: false; //one valid assure will give positive result
            }
        }

        if (!$isValid) {
            throw new InvalidArgumentException(implode(' OR ', $errors), null, $e);
        }
    }
}

namespace Assure {

    function checkCondition($value, $operator, $operand)
    {
        switch ($operator) {
            case '==':
                return $value == $operand;
            case '>=':
                return $value >= $operand;
            case '<=':
                return $value <= $operand;
            case '>':
                return $value > $operand;
            case '<':
                return $value < $operand;
            case '!=':
                return $value != $operand;
            default:
                throw new InvalidArgumentException("Unknown operator '$operator' given");
        }
    }
}
