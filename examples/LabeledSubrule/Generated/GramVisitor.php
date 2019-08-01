<?php
// Generated from Gram.g4 by ANTLR 4.7.2

namespace Examples\LabeledSubrule\Generated;

use Antlr4\Tree\ParseTreeVisitor;
use Examples\LabeledSubrule\Generated\Contexts\RootContext;
use Examples\LabeledSubrule\Generated\Contexts\FooContext;

/**
 * This interface defines a complete generic visitor for a parse tree produced by {@link GramParser}.
 */
interface GramVisitor extends ParseTreeVisitor
{
	/**
	 * Visit a parse tree produced by {@link GramParser#root}.
	 * Must return the visitor result.
	 * @param RootContext $ctx the parse tree
	 */
	function visitRoot(RootContext $ctx);

	/**
	 * Visit a parse tree produced by the {@code Foo}
	 * labeled alternative in {@link GramParser#subrule}.
	 * Must return the visitor result.
	 * @param FooContext $ctx the parse tree
	 */
	function visitFoo(FooContext $ctx);
}