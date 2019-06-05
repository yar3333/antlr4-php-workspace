<?php
// Generated from Expression.g4 by ANTLR 4.7.2

namespace generated;

use \Antlr4\Tree\AbstractParseTreeVisitor;

/**
 * This class provides an empty implementation of {@link ExpressionVisitor},
 * which can be extended to create a visitor which only needs to handle a subset
 * of the available methods.
 */
class ExpressionBaseVisitor extends AbstractParseTreeVisitor implements ExpressionVisitor
{
	/**
	 * {@inheritDoc}
	 *
	 * <p>The default implementation returns the result of calling
	 * {@link #visitChildren} on {@code ctx}.</p>
	 */
	function visitLogicExpression(Contexts\LogicExpressionContext $ctx) { return $this->visitChildren($ctx); }

	/**
	 * {@inheritDoc}
	 *
	 * <p>The default implementation returns the result of calling
	 * {@link #visitChildren} on {@code ctx}.</p>
	 */
	function visitAndEquation(Contexts\AndEquationContext $ctx) { return $this->visitChildren($ctx); }

	/**
	 * {@inheritDoc}
	 *
	 * <p>The default implementation returns the result of calling
	 * {@link #visitChildren} on {@code ctx}.</p>
	 */
	function visitEquation(Contexts\EquationContext $ctx) { return $this->visitChildren($ctx); }

	/**
	 * {@inheritDoc}
	 *
	 * <p>The default implementation returns the result of calling
	 * {@link #visitChildren} on {@code ctx}.</p>
	 */
	function visitNumericExpression(Contexts\NumericExpressionContext $ctx) { return $this->visitChildren($ctx); }

	/**
	 * {@inheritDoc}
	 *
	 * <p>The default implementation returns the result of calling
	 * {@link #visitChildren} on {@code ctx}.</p>
	 */
	function visitMultiplyingExpression(Contexts\MultiplyingExpressionContext $ctx) { return $this->visitChildren($ctx); }

	/**
	 * {@inheritDoc}
	 *
	 * <p>The default implementation returns the result of calling
	 * {@link #visitChildren} on {@code ctx}.</p>
	 */
	function visitPowExpression(Contexts\PowExpressionContext $ctx) { return $this->visitChildren($ctx); }

	/**
	 * {@inheritDoc}
	 *
	 * <p>The default implementation returns the result of calling
	 * {@link #visitChildren} on {@code ctx}.</p>
	 */
	function visitAtom(Contexts\AtomContext $ctx) { return $this->visitChildren($ctx); }

	/**
	 * {@inheritDoc}
	 *
	 * <p>The default implementation returns the result of calling
	 * {@link #visitChildren} on {@code ctx}.</p>
	 */
	function visitUnaryMinus(Contexts\UnaryMinusContext $ctx) { return $this->visitChildren($ctx); }

	/**
	 * {@inheritDoc}
	 *
	 * <p>The default implementation returns the result of calling
	 * {@link #visitChildren} on {@code ctx}.</p>
	 */
	function visitMinusable(Contexts\MinusableContext $ctx) { return $this->visitChildren($ctx); }

	/**
	 * {@inheritDoc}
	 *
	 * <p>The default implementation returns the result of calling
	 * {@link #visitChildren} on {@code ctx}.</p>
	 */
	function visitGroup(Contexts\GroupContext $ctx) { return $this->visitChildren($ctx); }

	/**
	 * {@inheritDoc}
	 *
	 * <p>The default implementation returns the result of calling
	 * {@link #visitChildren} on {@code ctx}.</p>
	 */
	function visitScientific(Contexts\ScientificContext $ctx) { return $this->visitChildren($ctx); }

	/**
	 * {@inheritDoc}
	 *
	 * <p>The default implementation returns the result of calling
	 * {@link #visitChildren} on {@code ctx}.</p>
	 */
	function visitString(Contexts\StringContext $ctx) { return $this->visitChildren($ctx); }

	/**
	 * {@inheritDoc}
	 *
	 * <p>The default implementation returns the result of calling
	 * {@link #visitChildren} on {@code ctx}.</p>
	 */
	function visitFunc(Contexts\FuncContext $ctx) { return $this->visitChildren($ctx); }

	/**
	 * {@inheritDoc}
	 *
	 * <p>The default implementation returns the result of calling
	 * {@link #visitChildren} on {@code ctx}.</p>
	 */
	function visitParameters(Contexts\ParametersContext $ctx) { return $this->visitChildren($ctx); }

	/**
	 * {@inheritDoc}
	 *
	 * <p>The default implementation returns the result of calling
	 * {@link #visitChildren} on {@code ctx}.</p>
	 */
	function visitParameter(Contexts\ParameterContext $ctx) { return $this->visitChildren($ctx); }

	/**
	 * {@inheritDoc}
	 *
	 * <p>The default implementation returns the result of calling
	 * {@link #visitChildren} on {@code ctx}.</p>
	 */
	function visitFuncName(Contexts\FuncNameContext $ctx) { return $this->visitChildren($ctx); }

	/**
	 * {@inheritDoc}
	 *
	 * <p>The default implementation returns the result of calling
	 * {@link #visitChildren} on {@code ctx}.</p>
	 */
	function visitParamName(Contexts\ParamNameContext $ctx) { return $this->visitChildren($ctx); }

	/**
	 * {@inheritDoc}
	 *
	 * <p>The default implementation returns the result of calling
	 * {@link #visitChildren} on {@code ctx}.</p>
	 */
	function visitParamValue(Contexts\ParamValueContext $ctx) { return $this->visitChildren($ctx); }

	/**
	 * {@inheritDoc}
	 *
	 * <p>The default implementation returns the result of calling
	 * {@link #visitChildren} on {@code ctx}.</p>
	 */
	function visitMetaFilter(Contexts\MetaFilterContext $ctx) { return $this->visitChildren($ctx); }

	/**
	 * {@inheritDoc}
	 *
	 * <p>The default implementation returns the result of calling
	 * {@link #visitChildren} on {@code ctx}.</p>
	 */
	function visitSimpleFilter(Contexts\SimpleFilterContext $ctx) { return $this->visitChildren($ctx); }

	/**
	 * {@inheritDoc}
	 *
	 * <p>The default implementation returns the result of calling
	 * {@link #visitChildren} on {@code ctx}.</p>
	 */
	function visitSimpleFilterExpression(Contexts\SimpleFilterExpressionContext $ctx) { return $this->visitChildren($ctx); }

	/**
	 * {@inheritDoc}
	 *
	 * <p>The default implementation returns the result of calling
	 * {@link #visitChildren} on {@code ctx}.</p>
	 */
	function visitSimpleFilterExpressionField(Contexts\SimpleFilterExpressionFieldContext $ctx) { return $this->visitChildren($ctx); }

	/**
	 * {@inheritDoc}
	 *
	 * <p>The default implementation returns the result of calling
	 * {@link #visitChildren} on {@code ctx}.</p>
	 */
	function visitSimpleFilterExpressionValue(Contexts\SimpleFilterExpressionValueContext $ctx) { return $this->visitChildren($ctx); }

	/**
	 * {@inheritDoc}
	 *
	 * <p>The default implementation returns the result of calling
	 * {@link #visitChildren} on {@code ctx}.</p>
	 */
	function visitCmpOp(Contexts\CmpOpContext $ctx) { return $this->visitChildren($ctx); }

	/**
	 * {@inheritDoc}
	 *
	 * <p>The default implementation returns the result of calling
	 * {@link #visitChildren} on {@code ctx}.</p>
	 */
	function visitNumber(Contexts\NumberContext $ctx) { return $this->visitChildren($ctx); }

	/**
	 * {@inheritDoc}
	 *
	 * <p>The default implementation returns the result of calling
	 * {@link #visitChildren} on {@code ctx}.</p>
	 */
	function visitScalarVariable(Contexts\ScalarVariableContext $ctx) { return $this->visitChildren($ctx); }

	/**
	 * {@inheritDoc}
	 *
	 * <p>The default implementation returns the result of calling
	 * {@link #visitChildren} on {@code ctx}.</p>
	 */
	function visitListLiteral(Contexts\ListLiteralContext $ctx) { return $this->visitChildren($ctx); }

	/**
	 * {@inheritDoc}
	 *
	 * <p>The default implementation returns the result of calling
	 * {@link #visitChildren} on {@code ctx}.</p>
	 */
	function visitListVariable(Contexts\ListVariableContext $ctx) { return $this->visitChildren($ctx); }

	/**
	 * {@inheritDoc}
	 *
	 * <p>The default implementation returns the result of calling
	 * {@link #visitChildren} on {@code ctx}.</p>
	 */
	function visitNotExpression(Contexts\NotExpressionContext $ctx) { return $this->visitChildren($ctx); }

	/**
	 * {@inheritDoc}
	 *
	 * <p>The default implementation returns the result of calling
	 * {@link #visitChildren} on {@code ctx}.</p>
	 */
	function visitNotExpressionInner(Contexts\NotExpressionInnerContext $ctx) { return $this->visitChildren($ctx); }

	/**
	 * {@inheritDoc}
	 *
	 * <p>The default implementation returns the result of calling
	 * {@link #visitChildren} on {@code ctx}.</p>
	 */
	function visitMinusExpression(Contexts\MinusExpressionContext $ctx) { return $this->visitChildren($ctx); }
}