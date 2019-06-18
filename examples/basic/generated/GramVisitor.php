<?php
// Generated from Gram.g4 by ANTLR 4.7.2

namespace generated;

use Antlr4\Tree\ParseTreeVisitor;
use generated\Contexts\Alt1Context;
use generated\Contexts\Alt2Context;
use generated\Contexts\BContext;
use generated\Contexts\EContext;
use generated\Contexts\ZContext;

/**
 * This interface defines a complete generic visitor for a parse tree produced by {@link GramParser}.
 */
interface GramVisitor extends ParseTreeVisitor
{
	/**
	 * Visit a parse tree produced by the {@code alt1}
	 * labeled alternative in {@link GramParser#a}.
	 * Must return the visitor result.
	 * @param Alt1Context $ctx the parse tree
	 */
	function visitAlt1(Alt1Context $ctx);

	/**
	 * Visit a parse tree produced by the {@code alt2}
	 * labeled alternative in {@link GramParser#a}.
	 * Must return the visitor result.
	 * @param Alt2Context $ctx the parse tree
	 */
	function visitAlt2(Alt2Context $ctx);

	/**
	 * Visit a parse tree produced by {@link GramParser#b}.
	 * Must return the visitor result.
	 * @param BContext $ctx the parse tree
	 */
	function visitB(BContext $ctx);

	/**
	 * Visit a parse tree produced by {@link GramParser#e}.
	 * Must return the visitor result.
	 * @param EContext $ctx the parse tree
	 */
	function visitE(EContext $ctx);

	/**
	 * Visit a parse tree produced by {@link GramParser#z}.
	 * Must return the visitor result.
	 * @param ZContext $ctx the parse tree
	 */
	function visitZ(ZContext $ctx);
}