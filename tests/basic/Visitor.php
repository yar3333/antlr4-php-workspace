<?php
/** @noinspection SenselessMethodDuplicationInspection */

use generated\Contexts\Alt1Context;
use generated\Contexts\Alt2Context;
use generated\Contexts\BContext;
use generated\Contexts\EContext;

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