<?php
// Generated from Expression.g4 by ANTLR 4.7.2

namespace generated;

use \Antlr4\Tree\ParseTreeVisitor;
use \generated\Contexts\LogicExpressionContext;
use \generated\Contexts\AndEquationContext;
use \generated\Contexts\EquationContext;
use \generated\Contexts\NumericExpressionContext;
use \generated\Contexts\MultiplyingExpressionContext;
use \generated\Contexts\PowExpressionContext;
use \generated\Contexts\AtomContext;
use \generated\Contexts\UnaryMinusContext;
use \generated\Contexts\MinusableContext;
use \generated\Contexts\GroupContext;
use \generated\Contexts\ScientificContext;
use \generated\Contexts\StringContext;
use \generated\Contexts\FuncContext;
use \generated\Contexts\ParametersContext;
use \generated\Contexts\ParameterContext;
use \generated\Contexts\FuncNameContext;
use \generated\Contexts\ParamNameContext;
use \generated\Contexts\ParamValueContext;
use \generated\Contexts\MetaFilterContext;
use \generated\Contexts\SimpleFilterContext;
use \generated\Contexts\SimpleFilterExpressionContext;
use \generated\Contexts\SimpleFilterExpressionFieldContext;
use \generated\Contexts\SimpleFilterExpressionValueContext;
use \generated\Contexts\CmpOpContext;
use \generated\Contexts\NumberContext;
use \generated\Contexts\ScalarVariableContext;
use \generated\Contexts\ListLiteralContext;
use \generated\Contexts\ListVariableContext;
use \generated\Contexts\NotExpressionContext;
use \generated\Contexts\NotExpressionInnerContext;
use \generated\Contexts\MinusExpressionContext;

/**
 * This interface defines a complete generic visitor for a parse tree produced by {@link ExpressionParser}.
 */
interface ExpressionVisitor extends ParseTreeVisitor
{
	/**
	 * Visit a parse tree produced by {@link ExpressionParser#logicExpression}.
	 * Must return the visitor result.
	 * @param LogicExpressionContext $ctx the parse tree
	 */
	function visitLogicExpression(LogicExpressionContext $ctx);

	/**
	 * Visit a parse tree produced by {@link ExpressionParser#andEquation}.
	 * Must return the visitor result.
	 * @param AndEquationContext $ctx the parse tree
	 */
	function visitAndEquation(AndEquationContext $ctx);

	/**
	 * Visit a parse tree produced by {@link ExpressionParser#equation}.
	 * Must return the visitor result.
	 * @param EquationContext $ctx the parse tree
	 */
	function visitEquation(EquationContext $ctx);

	/**
	 * Visit a parse tree produced by {@link ExpressionParser#numericExpression}.
	 * Must return the visitor result.
	 * @param NumericExpressionContext $ctx the parse tree
	 */
	function visitNumericExpression(NumericExpressionContext $ctx);

	/**
	 * Visit a parse tree produced by {@link ExpressionParser#multiplyingExpression}.
	 * Must return the visitor result.
	 * @param MultiplyingExpressionContext $ctx the parse tree
	 */
	function visitMultiplyingExpression(MultiplyingExpressionContext $ctx);

	/**
	 * Visit a parse tree produced by {@link ExpressionParser#powExpression}.
	 * Must return the visitor result.
	 * @param PowExpressionContext $ctx the parse tree
	 */
	function visitPowExpression(PowExpressionContext $ctx);

	/**
	 * Visit a parse tree produced by {@link ExpressionParser#atom}.
	 * Must return the visitor result.
	 * @param AtomContext $ctx the parse tree
	 */
	function visitAtom(AtomContext $ctx);

	/**
	 * Visit a parse tree produced by {@link ExpressionParser#unaryMinus}.
	 * Must return the visitor result.
	 * @param UnaryMinusContext $ctx the parse tree
	 */
	function visitUnaryMinus(UnaryMinusContext $ctx);

	/**
	 * Visit a parse tree produced by {@link ExpressionParser#minusable}.
	 * Must return the visitor result.
	 * @param MinusableContext $ctx the parse tree
	 */
	function visitMinusable(MinusableContext $ctx);

	/**
	 * Visit a parse tree produced by {@link ExpressionParser#group}.
	 * Must return the visitor result.
	 * @param GroupContext $ctx the parse tree
	 */
	function visitGroup(GroupContext $ctx);

	/**
	 * Visit a parse tree produced by {@link ExpressionParser#scientific}.
	 * Must return the visitor result.
	 * @param ScientificContext $ctx the parse tree
	 */
	function visitScientific(ScientificContext $ctx);

	/**
	 * Visit a parse tree produced by {@link ExpressionParser#string}.
	 * Must return the visitor result.
	 * @param StringContext $ctx the parse tree
	 */
	function visitString(StringContext $ctx);

	/**
	 * Visit a parse tree produced by {@link ExpressionParser#func}.
	 * Must return the visitor result.
	 * @param FuncContext $ctx the parse tree
	 */
	function visitFunc(FuncContext $ctx);

	/**
	 * Visit a parse tree produced by {@link ExpressionParser#parameters}.
	 * Must return the visitor result.
	 * @param ParametersContext $ctx the parse tree
	 */
	function visitParameters(ParametersContext $ctx);

	/**
	 * Visit a parse tree produced by {@link ExpressionParser#parameter}.
	 * Must return the visitor result.
	 * @param ParameterContext $ctx the parse tree
	 */
	function visitParameter(ParameterContext $ctx);

	/**
	 * Visit a parse tree produced by {@link ExpressionParser#funcName}.
	 * Must return the visitor result.
	 * @param FuncNameContext $ctx the parse tree
	 */
	function visitFuncName(FuncNameContext $ctx);

	/**
	 * Visit a parse tree produced by {@link ExpressionParser#paramName}.
	 * Must return the visitor result.
	 * @param ParamNameContext $ctx the parse tree
	 */
	function visitParamName(ParamNameContext $ctx);

	/**
	 * Visit a parse tree produced by {@link ExpressionParser#paramValue}.
	 * Must return the visitor result.
	 * @param ParamValueContext $ctx the parse tree
	 */
	function visitParamValue(ParamValueContext $ctx);

	/**
	 * Visit a parse tree produced by {@link ExpressionParser#metaFilter}.
	 * Must return the visitor result.
	 * @param MetaFilterContext $ctx the parse tree
	 */
	function visitMetaFilter(MetaFilterContext $ctx);

	/**
	 * Visit a parse tree produced by {@link ExpressionParser#simpleFilter}.
	 * Must return the visitor result.
	 * @param SimpleFilterContext $ctx the parse tree
	 */
	function visitSimpleFilter(SimpleFilterContext $ctx);

	/**
	 * Visit a parse tree produced by {@link ExpressionParser#simpleFilterExpression}.
	 * Must return the visitor result.
	 * @param SimpleFilterExpressionContext $ctx the parse tree
	 */
	function visitSimpleFilterExpression(SimpleFilterExpressionContext $ctx);

	/**
	 * Visit a parse tree produced by {@link ExpressionParser#simpleFilterExpressionField}.
	 * Must return the visitor result.
	 * @param SimpleFilterExpressionFieldContext $ctx the parse tree
	 */
	function visitSimpleFilterExpressionField(SimpleFilterExpressionFieldContext $ctx);

	/**
	 * Visit a parse tree produced by {@link ExpressionParser#simpleFilterExpressionValue}.
	 * Must return the visitor result.
	 * @param SimpleFilterExpressionValueContext $ctx the parse tree
	 */
	function visitSimpleFilterExpressionValue(SimpleFilterExpressionValueContext $ctx);

	/**
	 * Visit a parse tree produced by {@link ExpressionParser#cmpOp}.
	 * Must return the visitor result.
	 * @param CmpOpContext $ctx the parse tree
	 */
	function visitCmpOp(CmpOpContext $ctx);

	/**
	 * Visit a parse tree produced by {@link ExpressionParser#number}.
	 * Must return the visitor result.
	 * @param NumberContext $ctx the parse tree
	 */
	function visitNumber(NumberContext $ctx);

	/**
	 * Visit a parse tree produced by {@link ExpressionParser#scalarVariable}.
	 * Must return the visitor result.
	 * @param ScalarVariableContext $ctx the parse tree
	 */
	function visitScalarVariable(ScalarVariableContext $ctx);

	/**
	 * Visit a parse tree produced by {@link ExpressionParser#listLiteral}.
	 * Must return the visitor result.
	 * @param ListLiteralContext $ctx the parse tree
	 */
	function visitListLiteral(ListLiteralContext $ctx);

	/**
	 * Visit a parse tree produced by {@link ExpressionParser#listVariable}.
	 * Must return the visitor result.
	 * @param ListVariableContext $ctx the parse tree
	 */
	function visitListVariable(ListVariableContext $ctx);

	/**
	 * Visit a parse tree produced by {@link ExpressionParser#notExpression}.
	 * Must return the visitor result.
	 * @param NotExpressionContext $ctx the parse tree
	 */
	function visitNotExpression(NotExpressionContext $ctx);

	/**
	 * Visit a parse tree produced by {@link ExpressionParser#notExpressionInner}.
	 * Must return the visitor result.
	 * @param NotExpressionInnerContext $ctx the parse tree
	 */
	function visitNotExpressionInner(NotExpressionInnerContext $ctx);

	/**
	 * Visit a parse tree produced by {@link ExpressionParser#minusExpression}.
	 * Must return the visitor result.
	 * @param MinusExpressionContext $ctx the parse tree
	 */
	function visitMinusExpression(MinusExpressionContext $ctx);
}