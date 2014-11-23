<?php

require __DIR__ . '/../src/assure.php';

spl_autoload_register(
    function ($name) {
        if (strpos($name, 'Assure') === 0) {
            include __DIR__ . '/../src/' . str_replace('\\', '/', lcfirst($name)) . '.php';
        }
    }
);
