<?php
// Generated from Gram.g4 by ANTLR 4.7.2

/** @noinspection UnnecessaryParenthesesInspection */
/** @noinspection PhpRedundantCatchClauseInspection */
/** @noinspection PhpUnusedAliasInspection */
/** @noinspection DegradedSwitchInspection */
/** @noinspection PhpUnusedLocalVariableInspection */

namespace generated;

use \Antlr4\Atn\ATN;
use \Antlr4\Atn\ATNDeserializer;
use \Antlr4\Atn\ParserATNSimulator;
use \Antlr4\Dfa\DFA;
use \Antlr4\Error\Exceptions\FailedPredicateException;
use \Antlr4\Error\Exceptions\NoViableAltException;
use \Antlr4\Parser;
use \Antlr4\Predictioncontexts\PredictionContextCache;
use \Antlr4\Error\Exceptions\RecognitionException;
use \Antlr4\RuleContext;
use \Antlr4\Token;
use \Antlr4\TokenStream;
use \Antlr4\Vocabulary;
use \Antlr4\VocabularyImpl;

class GramParser extends Parser
{
	//static { RuntimeMetaData.checkVersion("4.7.2", RuntimeMetaData.VERSION); }

	private static $__decisionToDFA;
	/**
	 * @return DFA[]
	 */
	protected static function _decisionToDFA() : array
	{
	    if (self::$__decisionToDFA === null)
	    {
	        self::$__decisionToDFA = [];
            for ($i = 0; $i < self::_ATN()->getNumberOfDecisions(); $i++) {
                self::$__decisionToDFA[] = new DFA(self::_ATN()->getDecisionState($i), $i);
            }
	    }
	    return self::$__decisionToDFA;
	}

	private static $__sharedContextCache;
	protected static function _sharedContextCache() : PredictionContextCache { return self::$__sharedContextCache ?: (self::$__sharedContextCache = new PredictionContextCache()); }

	const T__0=1, T__1=2, T__2=3, T__3=4, T__4=5, T__5=6;

	const RULE_a = 0, RULE_b = 1, RULE_e = 2, RULE_z = 3;

	/**
	 * @return string[]|\ArrayObject
	 */
	private static function makeRuleNames() : \ArrayObject
	{
		return new \ArrayObject([ "a", "b", "e", "z" ]);
	}

	/**
	 * @var string[]|\ArrayObject
	 */
	private static $_ruleNames;

	/**
	 * @return string[]|\ArrayObject
	 */
	static function ruleNames() : \ArrayObject { return self::$_ruleNames ?: (self::$_ruleNames = self::makeRuleNames()); }


	/**
	 * @var string[]
	 */
	private const _LITERAL_NAMES = [ null, "'b'", "'c'", "'x'", "'y'", "'*'", 
	                                 "'foo'" ];

	/**
	 * @var string[]
	 */
	private const _SYMBOLIC_NAMES = [  ];

	private static $_VOCABULARY;
	static function VOCABULARY() : Vocabulary { return self::$_VOCABULARY ?: (self::$_VOCABULARY = new VocabularyImpl(self::_LITERAL_NAMES, self::_SYMBOLIC_NAMES)); }

	private static $_tokenNames;
	/**
	 * @return string[]
	 * @deprecated Use {@link #VOCABULARY} instead.
	 */
	static function tokenNames() : array
	{
		if (self::$_tokenNames === null)
		{
			self::$_tokenNames = [];
			for ($i = 0; $i < count(self::_SYMBOLIC_NAMES); $i++) {
				self::$_tokenNames[] = self::VOCABULARY()->getLiteralName($i);
				if (self::$_tokenNames[$i] === null) {
					self::$_tokenNames[$i] = self::VOCABULARY()->getSymbolicName($i);
				}

				if (self::$_tokenNames[$i] === null) {
					self::$_tokenNames[$i] = "<INVALID>";
				}
			}
		}
		return self::$_tokenNames;
	}

	/**
	 * @return string[]
	 * @deprecated
	 */
	function getTokenNames() : array { return self::tokenNames(); }

	function getVocabulary() : Vocabulary { return self::VOCABULARY(); }

	function getGrammarFileName() : string { return "Gram.g4"; }

	/**
	 * @return string[]|\ArrayObject
	 */
	function getRuleNames() : \ArrayObject { return self::ruleNames(); }

	function getSerializedATN() : string { return self::_serializedATN(); }

	function getATN() : ATN { return self::_ATN(); }

	function __construct(TokenStream $input) {
		parent::__construct($input);
		$this->_interp = new ParserATNSimulator($this, self::_ATN(), self::_decisionToDFA(), self::_sharedContextCache());
	}

    function sempred(?RuleContext $_localctx, int $ruleIndex, int $predIndex) : bool
    {
        /** @noinspection DegradedSwitchInspection */
        switch ($ruleIndex) {
            case 2:
                /** @noinspection PhpParamsInspection */
                return $this->e_sempred(/** @var Contexts\EContext */$_localctx, $predIndex);
        }
        return true;
    }
    private function e_sempred(?Contexts\EContext $_localctx, int $predIndex) : bool
    {
        /** @noinspection DegradedSwitchInspection */
    	switch ($predIndex) {
    	    case 0:
    		    return $this->precpred($this->_ctx, 2);
    	}
    	return true;
    }

	static function _serializedATN() : string
	{
		return
			"\u{3}\u{608B}\u{A72A}\u{8133}\u{B9ED}\u{417C}\u{3BE7}\u{7786}\u{5964}".
			"\u{3}\u{8}\u{23}\u{4}\u{2}\u{9}\u{2}\u{4}\u{3}\u{9}\u{3}\u{4}\u{4}\u{9}".
			"\u{4}\u{4}\u{5}\u{9}\u{5}\u{3}\u{2}\u{3}\u{2}\u{5}\u{2}\u{D}\u{A}\u{2}".
			"\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{5}\u{3}\u{12}\u{A}\u{3}\u{3}\u{4}\u{3}".
			"\u{4}\u{3}\u{4}\u{3}\u{4}\u{3}\u{4}\u{3}\u{4}\u{7}\u{4}\u{1A}\u{A}\u{4}".
			"\u{C}\u{4}\u{E}\u{4}\u{1D}\u{B}\u{4}\u{3}\u{5}\u{3}\u{5}\u{3}\u{5}\u{3}".
			"\u{5}\u{3}\u{5}\u{2}\u{3}\u{6}\u{6}\u{2}\u{4}\u{6}\u{8}\u{2}\u{2}\u{2}".
			"\u{21}\u{2}\u{C}\u{3}\u{2}\u{2}\u{2}\u{4}\u{11}\u{3}\u{2}\u{2}\u{2}\u{6}".
			"\u{13}\u{3}\u{2}\u{2}\u{2}\u{8}\u{1E}\u{3}\u{2}\u{2}\u{2}\u{A}\u{D}\u{7}".
			"\u{3}\u{2}\u{2}\u{B}\u{D}\u{7}\u{4}\u{2}\u{2}\u{C}\u{A}\u{3}\u{2}\u{2}".
			"\u{2}\u{C}\u{B}\u{3}\u{2}\u{2}\u{2}\u{D}\u{3}\u{3}\u{2}\u{2}\u{2}\u{E}".
			"\u{12}\u{7}\u{5}\u{2}\u{2}\u{F}\u{10}\u{7}\u{6}\u{2}\u{2}\u{10}\u{12}".
			"\u{8}\u{3}\u{1}\u{2}\u{11}\u{E}\u{3}\u{2}\u{2}\u{2}\u{11}\u{F}\u{3}\u{2}".
			"\u{2}\u{2}\u{12}\u{5}\u{3}\u{2}\u{2}\u{2}\u{13}\u{14}\u{8}\u{4}\u{1}".
			"\u{2}\u{14}\u{15}\u{7}\u{8}\u{2}\u{2}\u{15}\u{1B}\u{3}\u{2}\u{2}\u{2}".
			"\u{16}\u{17}\u{C}\u{4}\u{2}\u{2}\u{17}\u{18}\u{7}\u{7}\u{2}\u{2}\u{18}".
			"\u{1A}\u{5}\u{6}\u{4}\u{5}\u{19}\u{16}\u{3}\u{2}\u{2}\u{2}\u{1A}\u{1D}".
			"\u{3}\u{2}\u{2}\u{2}\u{1B}\u{19}\u{3}\u{2}\u{2}\u{2}\u{1B}\u{1C}\u{3}".
			"\u{2}\u{2}\u{2}\u{1C}\u{7}\u{3}\u{2}\u{2}\u{2}\u{1D}\u{1B}\u{3}\u{2}".
			"\u{2}\u{2}\u{1E}\u{1F}\u{5}\u{2}\u{2}\u{2}\u{1F}\u{20}\u{5}\u{4}\u{3}".
			"\u{2}\u{20}\u{21}\u{5}\u{6}\u{4}\u{2}\u{21}\u{9}\u{3}\u{2}\u{2}\u{2}".
			"\u{5}\u{C}\u{11}\u{1B}";
	}
	/**
	 * @var ATN
	 */
	private static $__ATN;
	static function _ATN() : ATN { return self::$__ATN ?: (self::$__ATN = (new ATNDeserializer())->deserialize(self::_serializedATN())); }

    function a() : Contexts\AContext
    {
        $_localctx = new Contexts\AContext($this->_ctx, $this->getState());
        $this->enterRule($_localctx, 0, GramParser::RULE_a);
        try {
            $this->setState(10);
            $this->_errHandler->sync($this);
            switch ($this->_input->LA(1)) {
            case GramParser::T__0:
            	$_localctx = new Contexts\Alt1Context($_localctx);
            	$this->enterOuterAlt($_localctx, 1);
            	{
            	$this->setState(8);
            	$this->match(GramParser::T__0);
            	}
            	break;
            case GramParser::T__1:
            	$_localctx = new Contexts\Alt2Context($_localctx);
            	$this->enterOuterAlt($_localctx, 2);
            	{
            	$this->setState(9);
            	$this->match(GramParser::T__1);
            	}
            	break;
            default:
            	throw new NoViableAltException($this);
            }
        }
        catch (RecognitionException $re) {
            $_localctx->exception = $re;
            $this->_errHandler->reportError($this, $re);
            $this->_errHandler->recover($this, $re);
        }
        finally {
            $this->exitRule();
        }
        return $_localctx;
    }

    function b() : Contexts\BContext
    {
        $_localctx = new Contexts\BContext($this->_ctx, $this->getState());
        $this->enterRule($_localctx, 2, GramParser::RULE_b);
        try {
            $this->setState(15);
            $this->_errHandler->sync($this);
            switch ($this->_input->LA(1)) {
            case GramParser::T__2:
            	$this->enterOuterAlt($_localctx, 1);
            	{
            	$this->setState(12);
            	$this->match(GramParser::T__2);
            	}
            	break;
            case GramParser::T__3:
            	$this->enterOuterAlt($_localctx, 2);
            	{
            	$this->setState(13);
            	$this->match(GramParser::T__3);

            	}
            	break;
            default:
            	throw new NoViableAltException($this);
            }
        }
        catch (RecognitionException $re) {
            $_localctx->exception = $re;
            $this->_errHandler->reportError($this, $re);
            $this->_errHandler->recover($this, $re);
        }
        finally {
            $this->exitRule();
        }
        return $_localctx;
    }

    function e() : Contexts\EContext
    {
    	return $this->_e(0);
    }

    private function _e(int $_p) : Contexts\EContext
    {
    	$_parentctx = $this->_ctx; // ParserRuleContext
    	$_parentState = $this->getState(); // int
    	$_localctx = new Contexts\EContext($this->_ctx, $_parentState);
    	/** @noinspection PhpUnusedLocalVariableInspection */
    	$_prevctx = $_localctx;
    	$_startState = 4; // int
    	$this->enterRecursionRule($_localctx, 4, GramParser::RULE_e, $_p);
    	try {
    		// int $_alt;
    		$this->enterOuterAlt($_localctx, 1);
    		{
    		{
    		$this->setState(18);
    		$this->match(GramParser::T__5);
    		}
    		$this->_ctx->stop = $this->_input->LT(-1);
    		$this->setState(25);
    		$this->_errHandler->sync($this);
    		$_alt = $this->getInterpreter()->adaptivePredict($this->_input, 2, $this->_ctx);
    		while ($_alt !== 2 && $_alt !== ATN::INVALID_ALT_NUMBER ) {
    			if ($_alt === 1 ) {
    				if ($this->_parseListeners !== null) $this->triggerExitRuleEvent();
    				/** @noinspection PhpUnusedLocalVariableInspection */
    				$_prevctx = $_localctx;
    				{
    				{
    				$_localctx = new Contexts\EContext($_parentctx, $_parentState);
    				$this->pushNewRecursionContext($_localctx, $_startState, GramParser::RULE_e);
    				$this->setState(20);
    				/** @noinspection UnnecessaryParenthesesInspection */
    				if (!($this->precpred($this->_ctx, 2))) throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->_ctx, 2)");
    				$this->setState(21);
    				$this->match(GramParser::T__4);
    				$this->setState(22);
    				$this->_e(3);
    				}
    				} 
    			}
    			$this->setState(27);
    			$this->_errHandler->sync($this);
    			$_alt = $this->getInterpreter()->adaptivePredict($this->_input, 2, $this->_ctx);
    		}
    		}
    	}
    	catch (RecognitionException $re) {
    		$_localctx->exception = $re;
    		$this->_errHandler->reportError($this, $re);
    		$this->_errHandler->recover($this, $re);
    	}
    	finally {
    		$this->unrollRecursionContexts($_parentctx);
    	}
    	return $_localctx;
    }

    function z() : Contexts\ZContext
    {
        $_localctx = new Contexts\ZContext($this->_ctx, $this->getState());
        $this->enterRule($_localctx, 6, GramParser::RULE_z);
        try {
            $this->enterOuterAlt($_localctx, 1);
            {
            $this->setState(28);
            $this->a();
            $this->setState(29);
            $this->b();
            $this->setState(30);
            $this->_e(0);
            }
        }
        catch (RecognitionException $re) {
            $_localctx->exception = $re;
            $this->_errHandler->reportError($this, $re);
            $this->_errHandler->recover($this, $re);
        }
        finally {
            $this->exitRule();
        }
        return $_localctx;
    }

}

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

namespace generated\Contexts;

use \Antlr4\ParserRuleContext;
use \Antlr4\Tree\ParseTreeVisitor;
use \Antlr4\Tree\TerminalNode;
use \generated\GramParser;
use \generated\GramVisitor;

class AContext extends ParserRuleContext
{
	function __construct(?ParserRuleContext $parent, int $invokingState=null)
	{
		parent::__construct($parent, $invokingState);
	}

	function getRuleIndex() : int { return GramParser::RULE_a; }
 
	/**
	 * @param AContext $ctx
	 */
	function copyFrom($ctx) : void
	{
		parent::copyFrom($ctx);
	}
}
class Alt2Context extends AContext
{
	function __construct(AContext $ctx) { parent::__construct($ctx); $this->copyFrom($ctx); }

	function accept(ParseTreeVisitor $visitor)
	{
		if ($visitor instanceof GramVisitor) return $visitor->visitAlt2($this);
		return $visitor->visitChildren($this);
	}
}
class Alt1Context extends AContext
{
	function __construct(AContext $ctx) { parent::__construct($ctx); $this->copyFrom($ctx); }

	function accept(ParseTreeVisitor $visitor)
	{
		if ($visitor instanceof GramVisitor) return $visitor->visitAlt1($this);
		return $visitor->visitChildren($this);
	}
}

class BContext extends ParserRuleContext
{
	function __construct(?ParserRuleContext $parent, int $invokingState=null)
	{
		parent::__construct($parent, $invokingState);
	}

	function getRuleIndex() : int { return GramParser::RULE_b; }
    function accept(ParseTreeVisitor $visitor)
    {
    	if ($visitor instanceof GramVisitor) return $visitor->visitB($this);
    	return $visitor->visitChildren($this);
    }
}

class EContext extends ParserRuleContext
{
	function e(int $i) : EContext
	{
	    /** @noinspection PhpIncompatibleReturnTypeInspection */
	    return $this->getTypedRuleContext(EContext::class, $i);
	}
	function __construct(?ParserRuleContext $parent, int $invokingState=null)
	{
		parent::__construct($parent, $invokingState);
	}

	function getRuleIndex() : int { return GramParser::RULE_e; }
    function accept(ParseTreeVisitor $visitor)
    {
    	if ($visitor instanceof GramVisitor) return $visitor->visitE($this);
    	return $visitor->visitChildren($this);
    }
}


class ZContext extends ParserRuleContext
{
	function a() : AContext
	{
	    /** @noinspection PhpIncompatibleReturnTypeInspection */
		return $this->getTypedRuleContext(AContext::class, 0);
	}
	function b() : BContext
	{
	    /** @noinspection PhpIncompatibleReturnTypeInspection */
		return $this->getTypedRuleContext(BContext::class, 0);
	}
	function e() : EContext
	{
	    /** @noinspection PhpIncompatibleReturnTypeInspection */
		return $this->getTypedRuleContext(EContext::class, 0);
	}
	function __construct(?ParserRuleContext $parent, int $invokingState=null)
	{
		parent::__construct($parent, $invokingState);
	}

	function getRuleIndex() : int { return GramParser::RULE_z; }
    function accept(ParseTreeVisitor $visitor)
    {
    	if ($visitor instanceof GramVisitor) return $visitor->visitZ($this);
    	return $visitor->visitChildren($this);
    }
}
