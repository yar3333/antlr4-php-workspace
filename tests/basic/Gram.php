<?php
/** @noinspection SenselessMethodDuplicationInspection */

######################################################################

use \Antlr4\CharStreams;
use \Antlr4\CommonTokenStream;
use \generated\Contexts\Alt1Context;
use \generated\Contexts\Alt2Context;
use \generated\Contexts\BContext;
use \generated\Contexts\EContext;
use \generated\GramLexer;
use \generated\GramParser;

spl_autoload_register(function ($class_name)
{
    if (strpos($class_name, "generated\\Contexts\\") === 0) {
        include 'generated/GramParser.php';
    }
    else {
        include "$class_name.php";
    }
});

######################################################################

/** @noinspection AutoloadingIssuesInspection */
class Visitor extends generated\GramBaseVisitor
{
	function visitAlt1(Alt1Context $ctx)
    {
	    return $this->visitChildren($ctx);
	}

	function visitAlt2(Alt2Context $ctx)
    {
        return $this->visitChildren($ctx);
    }

	function visitB(BContext $ctx)
    {
        return $this->visitChildren($ctx);
    }

	/**
	 * {@inheritDoc}
	 *
	 * <p>The default implementation returns the result of calling
	 * {@link #visitChildren} on {@code ctx}.</p>
	 */
	function visitE(EContext $ctx)
    {
        return $this->visitChildren($ctx);
    }
}

######################################################################

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
