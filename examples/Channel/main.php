<?php

namespace Examples\Channel;

require_once dirname(__DIR__) . '/autoload.php';

use Antlr4\CharStreams;
use Antlr4\CommonTokenStream;
use Examples\Channel\Generated\DemoLexer;

$lexer = new DemoLexer(CharStreams::fromString('x'));
$tokens = new CommonTokenStream($lexer);
$tokens->fill();