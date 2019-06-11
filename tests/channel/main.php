<?php
/** @noinspection SenselessMethodDuplicationInspection */

######################################################################

use \Antlr4\CharStreams;
use \Antlr4\CommonTokenStream;
use \generated\DemoLexer;

spl_autoload_register(function ($class_name)
{
    include "$class_name.php";
});

######################################################################


$lexer = new DemoLexer(CharStreams::fromString('x'));
$tokens = new CommonTokenStream($lexer);
$tokens->fill();