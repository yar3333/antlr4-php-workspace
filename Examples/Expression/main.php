<?php

namespace Examples\Expression;

require_once dirname(__DIR__) . '/autoload.php';

use Antlr4\CharStreams;
use Antlr4\CommonTokenStream;
use Examples\Expression\Generated\ExpressionLexer;
use Examples\Expression\Generated\ExpressionParser;


$lexer = new ExpressionLexer(CharStreams::fromString("12"));
//$lexer->AddErrorListener(new ThrowExceptionErrorListenerOnLex());
$tokens = new CommonTokenStream($lexer);
$parser = new ExpressionParser($tokens);
//$parser->addErrorListener(new ThrowExceptionErrorListenerOnParse());

$tree = $parser->atom();
$visitor = new ExpressionVisitor();
$r = $visitor->visit($tree);
echo $r;
