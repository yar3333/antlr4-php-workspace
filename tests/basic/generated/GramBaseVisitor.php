<?php
// Generated from Gram.g4 by ANTLR 4.7.2

namespace generated;

use Antlr4\Tree\AbstractParseTreeVisitor;

/**
 * This class provides an empty implementation of {@link GramVisitor},
 * which can be extended to create a visitor which only needs to handle a subset
 * of the available methods.
 */
class GramBaseVisitor extends AbstractParseTreeVisitor implements GramVisitor
{
	/**
	 * {@inheritDoc}
	 *
	 * <p>The default implementation returns the result of calling
	 * {@link #visitChildren} on {@code ctx}.</p>
	 */
	function visitAlt1(Contexts\Alt1Context $ctx) { return $this->visitChildren($ctx); }

	/**
	 * {@inheritDoc}
	 *
	 * <p>The default implementation returns the result of calling
	 * {@link #visitChildren} on {@code ctx}.</p>
	 */
	function visitAlt2(Contexts\Alt2Context $ctx) { return $this->visitChildren($ctx); }

	/**
	 * {@inheritDoc}
	 *
	 * <p>The default implementation returns the result of calling
	 * {@link #visitChildren} on {@code ctx}.</p>
	 */
	function visitB(Contexts\BContext $ctx) { return $this->visitChildren($ctx); }

	/**
	 * {@inheritDoc}
	 *
	 * <p>The default implementation returns the result of calling
	 * {@link #visitChildren} on {@code ctx}.</p>
	 */
	function visitE(Contexts\EContext $ctx) { return $this->visitChildren($ctx); }

	/**
	 * {@inheritDoc}
	 *
	 * <p>The default implementation returns the result of calling
	 * {@link #visitChildren} on {@code ctx}.</p>
	 */
	function visitZ(Contexts\ZContext $ctx) { return $this->visitChildren($ctx); }
}