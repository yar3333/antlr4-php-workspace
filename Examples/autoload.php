<?php

spl_autoload_register(function ($class_name)
{
    if (strpos($class_name, "Antlr4\\") === 0) {
        include dirname(__DIR__) . '/antlr4/runtime/Php/' . substr($class_name, strlen("Antlr4\\")) . '.php';
    }
    else {
        include dirname(__DIR__) . "/$class_name.php";
    }
});
