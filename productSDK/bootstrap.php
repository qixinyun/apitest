<?php

include_once config.php;

spl_autoload_register(
    function ($className) {

        $classFile = str_replace('\\', '/', $className) . '.class.php';

        if (file_exists($classFile)) {
            include_once $classFile;
        }
    }
);
