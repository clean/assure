<?php
/**
 * Wrapper for assure mechanism
 * Allows to add error prefix message 
 */
function validate(&$value, $assures, $errPrefix = null)
{
    try {
        assure($value, $assures);
    } catch (InvalidArgumentException $e) {
        $message = ($errPrefix)
            ? $errPrefix . ' ' . $e->getPrevious()->getMessage()
            : $e->getPrevious()->getMessage();

        throw new UnexpectedValueException($message, $e->getCode(), $e);
    }
}
