<?php

namespace Examples\Basic;

require_once dirname(__DIR__) . '/autoload.php';

use Antlr4\CharStreams;
use Antlr4\CommonTokenStream;
use Examples\Basic\Generated\GramLexer;
use Examples\Basic\Generated\GramParser;

$lexer = new GramLexer(CharStreams::fromString("foo*foo"));
//$lexer->AddErrorListener(new ThrowExceptionErrorListenerOnLex());
$tokens = new CommonTokenStream($lexer);
$parser = new GramParser($tokens);
//$parser->addErrorListener(new ThrowExceptionErrorListenerOnParse());

$treeA = $parser->a();
$visitorA = new Visitor();
$rA = $visitorA->visit($treeA);
echo $rA;

$treeB = $parser->b();
$visitorB = new Visitor();
$rB = $visitorB->visit($treeB);
echo $rB;

$treeE = $parser->e();
$visitorE = new Visitor();
$rE = $visitorE->visit($treeE);
echo $rE;

$treeZ = $parser->z();
$visitorZ = new Visitor();
$rZ = $visitorZ->visit($treeZ);
echo $rZ;
