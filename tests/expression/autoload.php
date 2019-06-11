<?php

spl_autoload_register(function ($class_name)
{
    if (strpos($class_name, "generated\\Contexts\\") === 0) {
        include 'generated/ExpressionParser.php';
    }
    else {
        include "$class_name.php";
    }
});
