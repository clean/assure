<?php
function assure(&$value, $assures)
{
    static $instances = [];

    $assures = (array)$assures;
    $isValid = false;
    $errors = array();

    foreach ($assures as $cmd) {
        if (!isset($instances[$cmd])) {
            $className = 'Assure\\' . ucfirst($cmd);
            $instances[$cmd] = new $className();
        }

        try {
            list(, $operator, $operand) = array_merge(explode(' ', $cmd), array(null, null));

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
