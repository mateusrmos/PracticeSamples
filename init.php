<?php

spl_autoload_register(function ($class) {
    // project-specific namespace prefix
    //$prefix = 'App\\Bar\\';
    $prefix = 'Practice';
    // base directory for the namespace prefix
    $base_dir = __DIR__;
    $fileToRequire = $class;
    if (strpos($class, $prefix) !== false) {
        $fileToRequire = str_replace($prefix, '', $class);
    }
    $file = $base_dir . $fileToRequire . '.php';

    if (file_exists($file)) {
        require $file;
    } else {
        return;
    }
});
require_once 'vendor/autoload.php';
