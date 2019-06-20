<?php

namespace Examples\LabeledSubrule;

require_once dirname(__DIR__) . '/autoload.php';

use Antlr4\CharStreams;
use Antlr4\CommonTokenStream;
use Examples\LabeledSubrule\Generated\GramLexer;
use Examples\LabeledSubrule\Generated\GramParser;

$lexer = new GramLexer(CharStreams::fromString('X'));
$tokens = new CommonTokenStream($lexer);
$parser = new GramParser($tokens);

$result = $parser->root();

/** @noinspection ForgottenDebugOutputInspection */
//var_dump($result);
//echo $result->toStringTree($parser);
echo $result->toStringTree($parser->getRuleNames());
