<?php
// Generated from Gram.g4 by ANTLR 4.7.2

/** @noinspection UnnecessaryParenthesesInspection */
/** @noinspection PhpRedundantCatchClauseInspection */
/** @noinspection PhpUnusedAliasInspection */
/** @noinspection DegradedSwitchInspection */
/** @noinspection PhpUnusedLocalVariableInspection */
/** @noinspection SelfClassReferencingInspection */

namespace generated;

use Antlr4\Atn\ATN;
use Antlr4\Atn\ATNDeserializer;
use Antlr4\Atn\ParserATNSimulator;
use Antlr4\Dfa\DFA;
use Antlr4\Error\Exceptions\FailedPredicateException;
use Antlr4\Error\Exceptions\NoViableAltException;
use Antlr4\Parser;
use Antlr4\Predictioncontexts\PredictionContextCache;
use Antlr4\Error\Exceptions\RecognitionException;
use Antlr4\RuleContext;
use Antlr4\Token;
use Antlr4\TokenStream;
use Antlr4\Vocabulary;
use Antlr4\VocabularyImpl;

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
	protected static function _sharedContextCache() : PredictionContextCache { return self::$__sharedContextCache ?? (self::$__sharedContextCache = new PredictionContextCache()); }

	const T__0=1;

	const RULE_root = 0, RULE_subrule = 1;

	/**
	 * @return string[]|\ArrayObject
	 */
	private static function makeRuleNames() : \ArrayObject
	{
		return new \ArrayObject([ "root", "subrule" ]);
	}

	/**
	 * @var string[]|\ArrayObject
	 */
	private static $_ruleNames;

	/**
	 * @return string[]|\ArrayObject
	 */
	static function ruleNames() : \ArrayObject { return self::$_ruleNames ?? (self::$_ruleNames = self::makeRuleNames()); }


	/**
	 * @var string[]
	 */
	private const _LITERAL_NAMES = [ null, "'X'" ];

	/**
	 * @var string[]
	 */
	private const _SYMBOLIC_NAMES = [  ];

	private static $_VOCABULARY;
	static function VOCABULARY() : Vocabulary { return self::$_VOCABULARY ?? (self::$_VOCABULARY = new VocabularyImpl(self::_LITERAL_NAMES, self::_SYMBOLIC_NAMES)); }

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
			$count = count(self::_SYMBOLIC_NAMES);
			for ($i = 0; $i < $count; $i++) {
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

	static function _serializedATN() : string
	{
		return
			"\u{3}\u{608B}\u{A72A}\u{8133}\u{B9ED}\u{417C}\u{3BE7}\u{7786}\u{5964}".
			"\u{3}\u{3}\u{C}\u{4}\u{2}\u{9}\u{2}\u{4}\u{3}\u{9}\u{3}\u{3}\u{2}\u{3}".
			"\u{2}\u{3}\u{2}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{2}\u{2}\u{4}\u{2}\u{4}".
			"\u{2}\u{2}\u{2}\u{9}\u{2}\u{6}\u{3}\u{2}\u{2}\u{2}\u{4}\u{9}\u{3}\u{2}".
			"\u{2}\u{2}\u{6}\u{7}\u{5}\u{4}\u{3}\u{2}\u{7}\u{8}\u{7}\u{2}\u{2}\u{3}".
			"\u{8}\u{3}\u{3}\u{2}\u{2}\u{2}\u{9}\u{A}\u{7}\u{3}\u{2}\u{2}\u{A}\u{5}".
			"\u{3}\u{2}\u{2}\u{2}\u{2}";
	}
	/**
	 * @var ATN
	 */
	private static $__ATN;
	static function _ATN() : ATN { return self::$__ATN ?? (self::$__ATN = (new ATNDeserializer())->deserialize(self::_serializedATN())); }

    function root() : Contexts\RootContext
    {
        $_localctx = new Contexts\RootContext($this->_ctx, $this->getState());
        $this->enterRule($_localctx, 0, GramParser::RULE_root);
        try {
            $this->enterOuterAlt($_localctx, 1);
            {
            $this->setState(4);
            $this->subrule();
            $this->setState(5);
            $this->match(GramParser::EOF);
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

    function subrule() : Contexts\SubruleContext
    {
        $_localctx = new Contexts\SubruleContext($this->_ctx, $this->getState());
        $this->enterRule($_localctx, 2, GramParser::RULE_subrule);
        try {
            $_localctx = new Contexts\FooContext($_localctx);
            $this->enterOuterAlt($_localctx, 1);
            {
            $this->setState(7);
            $this->match(GramParser::T__0);
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

use Antlr4\ParserRuleContext;
use Antlr4\Tree\ParseTreeVisitor;
use Antlr4\Tree\TerminalNode;
use generated\GramParser;
use generated\GramVisitor;

class RootContext extends ParserRuleContext
{
	function subrule() : SubruleContext
	{
	    /** @noinspection PhpIncompatibleReturnTypeInspection */
		return $this->getTypedRuleContext(SubruleContext::class, 0);
	}
	function EOF() : TerminalNode { return $this->getToken(GramParser::EOF, 0); }
	function __construct(?ParserRuleContext $parent, int $invokingState=null)
	{
		parent::__construct($parent, $invokingState);
	}

	function getRuleIndex() : int { return GramParser::RULE_root; }
    function accept(ParseTreeVisitor $visitor)
    {
    	if ($visitor instanceof GramVisitor) return $visitor->visitRoot($this);
    	return $visitor->visitChildren($this);
    }
}

class SubruleContext extends ParserRuleContext
{
	function __construct(?ParserRuleContext $parent, int $invokingState=null)
	{
		parent::__construct($parent, $invokingState);
	}

	function getRuleIndex() : int { return GramParser::RULE_subrule; }
 
	/**
	 * @param SubruleContext $ctx
	 */
	function copyFrom($ctx) : void
	{
		parent::copyFrom($ctx);
	}
}
class FooContext extends SubruleContext
{
	function __construct(SubruleContext $ctx) { parent::__construct($ctx); $this->copyFrom($ctx); }

	function accept(ParseTreeVisitor $visitor)
	{
		if ($visitor instanceof GramVisitor) return $visitor->visitFoo($this);
		return $visitor->visitChildren($this);
	}
}
