<?php

require_once 'autoload.php';

use Antlr4\CharStreams;
use Antlr4\CommonTokenStream;
use generated\DemoLexer;

$lexer = new DemoLexer(CharStreams::fromString('x'));
$tokens = new CommonTokenStream($lexer);
$tokens->fill();