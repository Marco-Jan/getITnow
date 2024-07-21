<?php

spl_autoload_register(function($class_name)
{
    $directories = [
        'models/',
        'controller/'
    ];

    foreach($directories as $directory){
        $file = dirname(__DIR__) . '/' . $directory . $class_name . '.php';

        if(file_exists($file)) {
            require_once $file;
            return;
        }
    }
}
);