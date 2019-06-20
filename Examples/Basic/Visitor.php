<?php
/** @noinspection SenselessMethodDuplicationInspection */

namespace Examples\Basic;

use Examples\Basic\Generated\Contexts\Alt1Context;
use Examples\Basic\Generated\Contexts\Alt2Context;
use Examples\Basic\Generated\Contexts\BContext;
use Examples\Basic\Generated\Contexts\EContext;

class Visitor extends Generated\GramBaseVisitor
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