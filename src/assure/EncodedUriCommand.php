<?php namespace Assure;

class EncodedUriCommand
{
    public function assure(&$value)
    {
        if (!preg_match("@^[a-zA-Z0-9%+-_/]*$@", $value)) {
            $result = array();
            foreach (explode('/', $value) as $part) {
                $result[] = urlencode($part);
            }

            $value = implode('/', $result);
        }
    }
}
