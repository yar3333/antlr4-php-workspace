<?php
// Generated from Expression.g4 by ANTLR 4.7.2

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

class ExpressionParser extends Parser
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

	const T__0=1, T__1=2, T__2=3, STRING=4, LET=5, LPAREN=6, RPAREN=7, LLIST=8, 
       RLIST=9, PLUS=10, MINUS=11, MUL=12, DIV=13, MOD=14, GT_OR_EQ=15, 
       LT_OR_EQ=16, GT=17, LT=18, EQ=19, POINT=20, IN=21, NOT_IN=22, NE=23, 
       LIKE=24, E=25, POW=26, OR=27, AND=28, COMMA=29, NOT=30, DIGIT=31, 
       ID=32, WS=33;

	const RULE_logicExpression = 0, RULE_andEquation = 1, RULE_equation = 2, 
       RULE_numericExpression = 3, RULE_multiplyingExpression = 4, RULE_powExpression = 5, 
       RULE_atom = 6, RULE_unaryMinus = 7, RULE_minusable = 8, RULE_group = 9, 
       RULE_scientific = 10, RULE_string = 11, RULE_func = 12, RULE_parameters = 13, 
       RULE_parameter = 14, RULE_funcName = 15, RULE_paramName = 16, RULE_paramValue = 17, 
       RULE_metaFilter = 18, RULE_simpleFilter = 19, RULE_simpleFilterExpression = 20, 
       RULE_simpleFilterExpressionField = 21, RULE_simpleFilterExpressionValue = 22, 
       RULE_cmpOp = 23, RULE_number = 24, RULE_scalarVariable = 25, RULE_listLiteral = 26, 
       RULE_listVariable = 27, RULE_notExpression = 28, RULE_notExpressionInner = 29, 
       RULE_minusExpression = 30;

	/**
	 * @return string[]|\ArrayObject
	 */
	private static function makeRuleNames() : \ArrayObject
	{
		return new \ArrayObject([ "logicExpression", "andEquation", "equation", 
                            "numericExpression", "multiplyingExpression", 
                            "powExpression", "atom", "unaryMinus", "minusable", 
                            "group", "scientific", "string", "func", "parameters", 
                            "parameter", "funcName", "paramName", "paramValue", 
                            "metaFilter", "simpleFilter", "simpleFilterExpression", 
                            "simpleFilterExpressionField", "simpleFilterExpressionValue", 
                            "cmpOp", "number", "scalarVariable", "listLiteral", 
                            "listVariable", "notExpression", "notExpressionInner", 
                            "minusExpression" ]);
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
	private const _LITERAL_NAMES = [ null, "'{'", "'}'", "'@'", null, "'='", 
	                                 "'('", "')'", "'['", "']'", "'+'", "'-'", 
	                                 "'*'", "'/'", "'%'", "'>='", "'<='", "'>'", 
	                                 "'<'", "'=='", "'.'", "'IN'", null, null, 
	                                 "'LIKE'", null, "'^'", null, null, "','" ];

	/**
	 * @var string[]
	 */
	private const _SYMBOLIC_NAMES = [ null, null, null, null, "STRING", "LET", 
	                                  "LPAREN", "RPAREN", "LLIST", "RLIST", 
	                                  "PLUS", "MINUS", "MUL", "DIV", "MOD", 
	                                  "GT_OR_EQ", "LT_OR_EQ", "GT", "LT", "EQ", 
	                                  "POINT", "IN", "NOT_IN", "NE", "LIKE", 
	                                  "E", "POW", "OR", "AND", "COMMA", "NOT", 
	                                  "DIGIT", "ID", "WS" ];

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

	function getGrammarFileName() : string { return "Expression.g4"; }

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
			"\u{3}\u{23}\u{F9}\u{4}\u{2}\u{9}\u{2}\u{4}\u{3}\u{9}\u{3}\u{4}\u{4}\u{9}".
			"\u{4}\u{4}\u{5}\u{9}\u{5}\u{4}\u{6}\u{9}\u{6}\u{4}\u{7}\u{9}\u{7}\u{4}".
			"\u{8}\u{9}\u{8}\u{4}\u{9}\u{9}\u{9}\u{4}\u{A}\u{9}\u{A}\u{4}\u{B}\u{9}".
			"\u{B}\u{4}\u{C}\u{9}\u{C}\u{4}\u{D}\u{9}\u{D}\u{4}\u{E}\u{9}\u{E}\u{4}".
			"\u{F}\u{9}\u{F}\u{4}\u{10}\u{9}\u{10}\u{4}\u{11}\u{9}\u{11}\u{4}\u{12}".
			"\u{9}\u{12}\u{4}\u{13}\u{9}\u{13}\u{4}\u{14}\u{9}\u{14}\u{4}\u{15}\u{9}".
			"\u{15}\u{4}\u{16}\u{9}\u{16}\u{4}\u{17}\u{9}\u{17}\u{4}\u{18}\u{9}\u{18}".
			"\u{4}\u{19}\u{9}\u{19}\u{4}\u{1A}\u{9}\u{1A}\u{4}\u{1B}\u{9}\u{1B}\u{4}".
			"\u{1C}\u{9}\u{1C}\u{4}\u{1D}\u{9}\u{1D}\u{4}\u{1E}\u{9}\u{1E}\u{4}\u{1F}".
			"\u{9}\u{1F}\u{4}\u{20}\u{9}\u{20}\u{3}\u{2}\u{3}\u{2}\u{3}\u{2}\u{7}".
			"\u{2}\u{44}\u{A}\u{2}\u{C}\u{2}\u{E}\u{2}\u{47}\u{B}\u{2}\u{3}\u{3}\u{3}".
			"\u{3}\u{3}\u{3}\u{7}\u{3}\u{4C}\u{A}\u{3}\u{C}\u{3}\u{E}\u{3}\u{4F}\u{B}".
			"\u{3}\u{3}\u{4}\u{3}\u{4}\u{3}\u{4}\u{3}\u{4}\u{5}\u{4}\u{55}\u{A}\u{4}".
			"\u{3}\u{5}\u{3}\u{5}\u{3}\u{5}\u{7}\u{5}\u{5A}\u{A}\u{5}\u{C}\u{5}\u{E}".
			"\u{5}\u{5D}\u{B}\u{5}\u{3}\u{6}\u{3}\u{6}\u{3}\u{6}\u{7}\u{6}\u{62}\u{A}".
			"\u{6}\u{C}\u{6}\u{E}\u{6}\u{65}\u{B}\u{6}\u{3}\u{7}\u{3}\u{7}\u{3}\u{7}".
			"\u{5}\u{7}\u{6A}\u{A}\u{7}\u{3}\u{8}\u{3}\u{8}\u{3}\u{8}\u{3}\u{8}\u{3}".
			"\u{8}\u{3}\u{8}\u{3}\u{8}\u{3}\u{8}\u{3}\u{8}\u{5}\u{8}\u{75}\u{A}\u{8}".
			"\u{3}\u{9}\u{3}\u{9}\u{3}\u{9}\u{3}\u{A}\u{3}\u{A}\u{3}\u{A}\u{5}\u{A}".
			"\u{7D}\u{A}\u{A}\u{3}\u{B}\u{3}\u{B}\u{3}\u{B}\u{3}\u{B}\u{3}\u{C}\u{3}".
			"\u{C}\u{3}\u{C}\u{5}\u{C}\u{86}\u{A}\u{C}\u{3}\u{D}\u{3}\u{D}\u{3}\u{E}".
			"\u{3}\u{E}\u{3}\u{E}\u{5}\u{E}\u{8D}\u{A}\u{E}\u{3}\u{E}\u{3}\u{E}\u{3}".
			"\u{F}\u{3}\u{F}\u{3}\u{F}\u{7}\u{F}\u{94}\u{A}\u{F}\u{C}\u{F}\u{E}\u{F}".
			"\u{97}\u{B}\u{F}\u{3}\u{10}\u{3}\u{10}\u{3}\u{10}\u{5}\u{10}\u{9C}\u{A}".
			"\u{10}\u{3}\u{10}\u{3}\u{10}\u{3}\u{11}\u{3}\u{11}\u{3}\u{12}\u{3}\u{12}".
			"\u{3}\u{13}\u{3}\u{13}\u{5}\u{13}\u{A6}\u{A}\u{13}\u{3}\u{14}\u{3}\u{14}".
			"\u{3}\u{15}\u{3}\u{15}\u{3}\u{15}\u{3}\u{15}\u{7}\u{15}\u{AE}\u{A}\u{15}".
			"\u{C}\u{15}\u{E}\u{15}\u{B1}\u{B}\u{15}\u{5}\u{15}\u{B3}\u{A}\u{15}\u{3}".
			"\u{15}\u{3}\u{15}\u{3}\u{16}\u{3}\u{16}\u{3}\u{16}\u{3}\u{16}\u{3}\u{17}".
			"\u{3}\u{17}\u{3}\u{18}\u{3}\u{18}\u{3}\u{18}\u{3}\u{18}\u{3}\u{18}\u{5}".
			"\u{18}\u{C2}\u{A}\u{18}\u{3}\u{19}\u{3}\u{19}\u{3}\u{1A}\u{5}\u{1A}\u{C7}".
			"\u{A}\u{1A}\u{3}\u{1A}\u{6}\u{1A}\u{CA}\u{A}\u{1A}\u{D}\u{1A}\u{E}\u{1A}".
			"\u{CB}\u{3}\u{1A}\u{3}\u{1A}\u{6}\u{1A}\u{D0}\u{A}\u{1A}\u{D}\u{1A}\u{E}".
			"\u{1A}\u{D1}\u{5}\u{1A}\u{D4}\u{A}\u{1A}\u{3}\u{1B}\u{3}\u{1B}\u{3}\u{1B}".
			"\u{7}\u{1B}\u{D9}\u{A}\u{1B}\u{C}\u{1B}\u{E}\u{1B}\u{DC}\u{B}\u{1B}\u{3}".
			"\u{1C}\u{3}\u{1C}\u{3}\u{1C}\u{3}\u{1C}\u{7}\u{1C}\u{E2}\u{A}\u{1C}\u{C}".
			"\u{1C}\u{E}\u{1C}\u{E5}\u{B}\u{1C}\u{5}\u{1C}\u{E7}\u{A}\u{1C}\u{3}\u{1C}".
			"\u{3}\u{1C}\u{3}\u{1D}\u{3}\u{1D}\u{3}\u{1D}\u{3}\u{1E}\u{3}\u{1E}\u{3}".
			"\u{1E}\u{3}\u{1F}\u{3}\u{1F}\u{3}\u{1F}\u{5}\u{1F}\u{F4}\u{A}\u{1F}\u{3}".
			"\u{20}\u{3}\u{20}\u{3}\u{20}\u{3}\u{20}\u{2}\u{2}\u{21}\u{2}\u{4}\u{6}".
			"\u{8}\u{A}\u{C}\u{E}\u{10}\u{12}\u{14}\u{16}\u{18}\u{1A}\u{1C}\u{1E}".
			"\u{20}\u{22}\u{24}\u{26}\u{28}\u{2A}\u{2C}\u{2E}\u{30}\u{32}\u{34}\u{36}".
			"\u{38}\u{3A}\u{3C}\u{3E}\u{2}\u{5}\u{3}\u{2}\u{C}\u{D}\u{3}\u{2}\u{E}".
			"\u{10}\u{4}\u{2}\u{11}\u{15}\u{17}\u{1A}\u{2}\u{FD}\u{2}\u{40}\u{3}\u{2}".
			"\u{2}\u{2}\u{4}\u{48}\u{3}\u{2}\u{2}\u{2}\u{6}\u{50}\u{3}\u{2}\u{2}\u{2}".
			"\u{8}\u{56}\u{3}\u{2}\u{2}\u{2}\u{A}\u{5E}\u{3}\u{2}\u{2}\u{2}\u{C}\u{66}".
			"\u{3}\u{2}\u{2}\u{2}\u{E}\u{74}\u{3}\u{2}\u{2}\u{2}\u{10}\u{76}\u{3}".
			"\u{2}\u{2}\u{2}\u{12}\u{7C}\u{3}\u{2}\u{2}\u{2}\u{14}\u{7E}\u{3}\u{2}".
			"\u{2}\u{2}\u{16}\u{82}\u{3}\u{2}\u{2}\u{2}\u{18}\u{87}\u{3}\u{2}\u{2}".
			"\u{2}\u{1A}\u{89}\u{3}\u{2}\u{2}\u{2}\u{1C}\u{90}\u{3}\u{2}\u{2}\u{2}".
			"\u{1E}\u{9B}\u{3}\u{2}\u{2}\u{2}\u{20}\u{9F}\u{3}\u{2}\u{2}\u{2}\u{22}".
			"\u{A1}\u{3}\u{2}\u{2}\u{2}\u{24}\u{A5}\u{3}\u{2}\u{2}\u{2}\u{26}\u{A7}".
			"\u{3}\u{2}\u{2}\u{2}\u{28}\u{A9}\u{3}\u{2}\u{2}\u{2}\u{2A}\u{B6}\u{3}".
			"\u{2}\u{2}\u{2}\u{2C}\u{BA}\u{3}\u{2}\u{2}\u{2}\u{2E}\u{C1}\u{3}\u{2}".
			"\u{2}\u{2}\u{30}\u{C3}\u{3}\u{2}\u{2}\u{2}\u{32}\u{C6}\u{3}\u{2}\u{2}".
			"\u{2}\u{34}\u{D5}\u{3}\u{2}\u{2}\u{2}\u{36}\u{DD}\u{3}\u{2}\u{2}\u{2}".
			"\u{38}\u{EA}\u{3}\u{2}\u{2}\u{2}\u{3A}\u{ED}\u{3}\u{2}\u{2}\u{2}\u{3C}".
			"\u{F3}\u{3}\u{2}\u{2}\u{2}\u{3E}\u{F5}\u{3}\u{2}\u{2}\u{2}\u{40}\u{45}".
			"\u{5}\u{4}\u{3}\u{2}\u{41}\u{42}\u{7}\u{1D}\u{2}\u{2}\u{42}\u{44}\u{5}".
			"\u{4}\u{3}\u{2}\u{43}\u{41}\u{3}\u{2}\u{2}\u{2}\u{44}\u{47}\u{3}\u{2}".
			"\u{2}\u{2}\u{45}\u{43}\u{3}\u{2}\u{2}\u{2}\u{45}\u{46}\u{3}\u{2}\u{2}".
			"\u{2}\u{46}\u{3}\u{3}\u{2}\u{2}\u{2}\u{47}\u{45}\u{3}\u{2}\u{2}\u{2}".
			"\u{48}\u{4D}\u{5}\u{6}\u{4}\u{2}\u{49}\u{4A}\u{7}\u{1E}\u{2}\u{2}\u{4A}".
			"\u{4C}\u{5}\u{6}\u{4}\u{2}\u{4B}\u{49}\u{3}\u{2}\u{2}\u{2}\u{4C}\u{4F}".
			"\u{3}\u{2}\u{2}\u{2}\u{4D}\u{4B}\u{3}\u{2}\u{2}\u{2}\u{4D}\u{4E}\u{3}".
			"\u{2}\u{2}\u{2}\u{4E}\u{5}\u{3}\u{2}\u{2}\u{2}\u{4F}\u{4D}\u{3}\u{2}".
			"\u{2}\u{2}\u{50}\u{54}\u{5}\u{8}\u{5}\u{2}\u{51}\u{52}\u{5}\u{30}\u{19}".
			"\u{2}\u{52}\u{53}\u{5}\u{8}\u{5}\u{2}\u{53}\u{55}\u{3}\u{2}\u{2}\u{2}".
			"\u{54}\u{51}\u{3}\u{2}\u{2}\u{2}\u{54}\u{55}\u{3}\u{2}\u{2}\u{2}\u{55}".
			"\u{7}\u{3}\u{2}\u{2}\u{2}\u{56}\u{5B}\u{5}\u{A}\u{6}\u{2}\u{57}\u{58}".
			"\u{9}\u{2}\u{2}\u{2}\u{58}\u{5A}\u{5}\u{A}\u{6}\u{2}\u{59}\u{57}\u{3}".
			"\u{2}\u{2}\u{2}\u{5A}\u{5D}\u{3}\u{2}\u{2}\u{2}\u{5B}\u{59}\u{3}\u{2}".
			"\u{2}\u{2}\u{5B}\u{5C}\u{3}\u{2}\u{2}\u{2}\u{5C}\u{9}\u{3}\u{2}\u{2}".
			"\u{2}\u{5D}\u{5B}\u{3}\u{2}\u{2}\u{2}\u{5E}\u{63}\u{5}\u{C}\u{7}\u{2}".
			"\u{5F}\u{60}\u{9}\u{3}\u{2}\u{2}\u{60}\u{62}\u{5}\u{C}\u{7}\u{2}\u{61}".
			"\u{5F}\u{3}\u{2}\u{2}\u{2}\u{62}\u{65}\u{3}\u{2}\u{2}\u{2}\u{63}\u{61}".
			"\u{3}\u{2}\u{2}\u{2}\u{63}\u{64}\u{3}\u{2}\u{2}\u{2}\u{64}\u{B}\u{3}".
			"\u{2}\u{2}\u{2}\u{65}\u{63}\u{3}\u{2}\u{2}\u{2}\u{66}\u{69}\u{5}\u{E}".
			"\u{8}\u{2}\u{67}\u{68}\u{7}\u{1C}\u{2}\u{2}\u{68}\u{6A}\u{5}\u{E}\u{8}".
			"\u{2}\u{69}\u{67}\u{3}\u{2}\u{2}\u{2}\u{69}\u{6A}\u{3}\u{2}\u{2}\u{2}".
			"\u{6A}\u{D}\u{3}\u{2}\u{2}\u{2}\u{6B}\u{75}\u{5}\u{16}\u{C}\u{2}\u{6C}".
			"\u{75}\u{5}\u{18}\u{D}\u{2}\u{6D}\u{75}\u{5}\u{34}\u{1B}\u{2}\u{6E}\u{75}".
			"\u{5}\u{14}\u{B}\u{2}\u{6F}\u{75}\u{5}\u{36}\u{1C}\u{2}\u{70}\u{75}\u{5}".
			"\u{38}\u{1D}\u{2}\u{71}\u{75}\u{5}\u{1A}\u{E}\u{2}\u{72}\u{75}\u{5}\u{3A}".
			"\u{1E}\u{2}\u{73}\u{75}\u{5}\u{10}\u{9}\u{2}\u{74}\u{6B}\u{3}\u{2}\u{2}".
			"\u{2}\u{74}\u{6C}\u{3}\u{2}\u{2}\u{2}\u{74}\u{6D}\u{3}\u{2}\u{2}\u{2}".
			"\u{74}\u{6E}\u{3}\u{2}\u{2}\u{2}\u{74}\u{6F}\u{3}\u{2}\u{2}\u{2}\u{74}".
			"\u{70}\u{3}\u{2}\u{2}\u{2}\u{74}\u{71}\u{3}\u{2}\u{2}\u{2}\u{74}\u{72}".
			"\u{3}\u{2}\u{2}\u{2}\u{74}\u{73}\u{3}\u{2}\u{2}\u{2}\u{75}\u{F}\u{3}".
			"\u{2}\u{2}\u{2}\u{76}\u{77}\u{7}\u{D}\u{2}\u{2}\u{77}\u{78}\u{5}\u{12}".
			"\u{A}\u{2}\u{78}\u{11}\u{3}\u{2}\u{2}\u{2}\u{79}\u{7D}\u{5}\u{34}\u{1B}".
			"\u{2}\u{7A}\u{7D}\u{5}\u{14}\u{B}\u{2}\u{7B}\u{7D}\u{5}\u{1A}\u{E}\u{2}".
			"\u{7C}\u{79}\u{3}\u{2}\u{2}\u{2}\u{7C}\u{7A}\u{3}\u{2}\u{2}\u{2}\u{7C}".
			"\u{7B}\u{3}\u{2}\u{2}\u{2}\u{7D}\u{13}\u{3}\u{2}\u{2}\u{2}\u{7E}\u{7F}".
			"\u{7}\u{8}\u{2}\u{2}\u{7F}\u{80}\u{5}\u{2}\u{2}\u{2}\u{80}\u{81}\u{7}".
			"\u{9}\u{2}\u{2}\u{81}\u{15}\u{3}\u{2}\u{2}\u{2}\u{82}\u{85}\u{5}\u{32}".
			"\u{1A}\u{2}\u{83}\u{84}\u{7}\u{1B}\u{2}\u{2}\u{84}\u{86}\u{5}\u{32}\u{1A}".
			"\u{2}\u{85}\u{83}\u{3}\u{2}\u{2}\u{2}\u{85}\u{86}\u{3}\u{2}\u{2}\u{2}".
			"\u{86}\u{17}\u{3}\u{2}\u{2}\u{2}\u{87}\u{88}\u{7}\u{6}\u{2}\u{2}\u{88}".
			"\u{19}\u{3}\u{2}\u{2}\u{2}\u{89}\u{8A}\u{5}\u{20}\u{11}\u{2}\u{8A}\u{8C}".
			"\u{7}\u{8}\u{2}\u{2}\u{8B}\u{8D}\u{5}\u{1C}\u{F}\u{2}\u{8C}\u{8B}\u{3}".
			"\u{2}\u{2}\u{2}\u{8C}\u{8D}\u{3}\u{2}\u{2}\u{2}\u{8D}\u{8E}\u{3}\u{2}".
			"\u{2}\u{2}\u{8E}\u{8F}\u{7}\u{9}\u{2}\u{2}\u{8F}\u{1B}\u{3}\u{2}\u{2}".
			"\u{2}\u{90}\u{95}\u{5}\u{1E}\u{10}\u{2}\u{91}\u{92}\u{7}\u{1F}\u{2}\u{2}".
			"\u{92}\u{94}\u{5}\u{1E}\u{10}\u{2}\u{93}\u{91}\u{3}\u{2}\u{2}\u{2}\u{94}".
			"\u{97}\u{3}\u{2}\u{2}\u{2}\u{95}\u{93}\u{3}\u{2}\u{2}\u{2}\u{95}\u{96}".
			"\u{3}\u{2}\u{2}\u{2}\u{96}\u{1D}\u{3}\u{2}\u{2}\u{2}\u{97}\u{95}\u{3}".
			"\u{2}\u{2}\u{2}\u{98}\u{99}\u{5}\u{22}\u{12}\u{2}\u{99}\u{9A}\u{7}\u{7}".
			"\u{2}\u{2}\u{9A}\u{9C}\u{3}\u{2}\u{2}\u{2}\u{9B}\u{98}\u{3}\u{2}\u{2}".
			"\u{2}\u{9B}\u{9C}\u{3}\u{2}\u{2}\u{2}\u{9C}\u{9D}\u{3}\u{2}\u{2}\u{2}".
			"\u{9D}\u{9E}\u{5}\u{24}\u{13}\u{2}\u{9E}\u{1F}\u{3}\u{2}\u{2}\u{2}\u{9F}".
			"\u{A0}\u{7}\u{22}\u{2}\u{2}\u{A0}\u{21}\u{3}\u{2}\u{2}\u{2}\u{A1}\u{A2}".
			"\u{7}\u{22}\u{2}\u{2}\u{A2}\u{23}\u{3}\u{2}\u{2}\u{2}\u{A3}\u{A6}\u{5}".
			"\u{2}\u{2}\u{2}\u{A4}\u{A6}\u{5}\u{26}\u{14}\u{2}\u{A5}\u{A3}\u{3}\u{2}".
			"\u{2}\u{2}\u{A5}\u{A4}\u{3}\u{2}\u{2}\u{2}\u{A6}\u{25}\u{3}\u{2}\u{2}".
			"\u{2}\u{A7}\u{A8}\u{5}\u{28}\u{15}\u{2}\u{A8}\u{27}\u{3}\u{2}\u{2}\u{2}".
			"\u{A9}\u{B2}\u{7}\u{3}\u{2}\u{2}\u{AA}\u{AF}\u{5}\u{2A}\u{16}\u{2}\u{AB}".
			"\u{AC}\u{7}\u{1F}\u{2}\u{2}\u{AC}\u{AE}\u{5}\u{2A}\u{16}\u{2}\u{AD}\u{AB}".
			"\u{3}\u{2}\u{2}\u{2}\u{AE}\u{B1}\u{3}\u{2}\u{2}\u{2}\u{AF}\u{AD}\u{3}".
			"\u{2}\u{2}\u{2}\u{AF}\u{B0}\u{3}\u{2}\u{2}\u{2}\u{B0}\u{B3}\u{3}\u{2}".
			"\u{2}\u{2}\u{B1}\u{AF}\u{3}\u{2}\u{2}\u{2}\u{B2}\u{AA}\u{3}\u{2}\u{2}".
			"\u{2}\u{B2}\u{B3}\u{3}\u{2}\u{2}\u{2}\u{B3}\u{B4}\u{3}\u{2}\u{2}\u{2}".
			"\u{B4}\u{B5}\u{7}\u{4}\u{2}\u{2}\u{B5}\u{29}\u{3}\u{2}\u{2}\u{2}\u{B6}".
			"\u{B7}\u{5}\u{2C}\u{17}\u{2}\u{B7}\u{B8}\u{5}\u{30}\u{19}\u{2}\u{B8}".
			"\u{B9}\u{5}\u{2E}\u{18}\u{2}\u{B9}\u{2B}\u{3}\u{2}\u{2}\u{2}\u{BA}\u{BB}".
			"\u{7}\u{22}\u{2}\u{2}\u{BB}\u{2D}\u{3}\u{2}\u{2}\u{2}\u{BC}\u{C2}\u{5}".
			"\u{34}\u{1B}\u{2}\u{BD}\u{C2}\u{5}\u{16}\u{C}\u{2}\u{BE}\u{C2}\u{5}\u{18}".
			"\u{D}\u{2}\u{BF}\u{C2}\u{5}\u{36}\u{1C}\u{2}\u{C0}\u{C2}\u{5}\u{38}\u{1D}".
			"\u{2}\u{C1}\u{BC}\u{3}\u{2}\u{2}\u{2}\u{C1}\u{BD}\u{3}\u{2}\u{2}\u{2}".
			"\u{C1}\u{BE}\u{3}\u{2}\u{2}\u{2}\u{C1}\u{BF}\u{3}\u{2}\u{2}\u{2}\u{C1}".
			"\u{C0}\u{3}\u{2}\u{2}\u{2}\u{C2}\u{2F}\u{3}\u{2}\u{2}\u{2}\u{C3}\u{C4}".
			"\u{9}\u{4}\u{2}\u{2}\u{C4}\u{31}\u{3}\u{2}\u{2}\u{2}\u{C5}\u{C7}\u{7}".
			"\u{D}\u{2}\u{2}\u{C6}\u{C5}\u{3}\u{2}\u{2}\u{2}\u{C6}\u{C7}\u{3}\u{2}".
			"\u{2}\u{2}\u{C7}\u{C9}\u{3}\u{2}\u{2}\u{2}\u{C8}\u{CA}\u{7}\u{21}\u{2}".
			"\u{2}\u{C9}\u{C8}\u{3}\u{2}\u{2}\u{2}\u{CA}\u{CB}\u{3}\u{2}\u{2}\u{2}".
			"\u{CB}\u{C9}\u{3}\u{2}\u{2}\u{2}\u{CB}\u{CC}\u{3}\u{2}\u{2}\u{2}\u{CC}".
			"\u{D3}\u{3}\u{2}\u{2}\u{2}\u{CD}\u{CF}\u{7}\u{16}\u{2}\u{2}\u{CE}\u{D0}".
			"\u{7}\u{21}\u{2}\u{2}\u{CF}\u{CE}\u{3}\u{2}\u{2}\u{2}\u{D0}\u{D1}\u{3}".
			"\u{2}\u{2}\u{2}\u{D1}\u{CF}\u{3}\u{2}\u{2}\u{2}\u{D1}\u{D2}\u{3}\u{2}".
			"\u{2}\u{2}\u{D2}\u{D4}\u{3}\u{2}\u{2}\u{2}\u{D3}\u{CD}\u{3}\u{2}\u{2}".
			"\u{2}\u{D3}\u{D4}\u{3}\u{2}\u{2}\u{2}\u{D4}\u{33}\u{3}\u{2}\u{2}\u{2}".
			"\u{D5}\u{DA}\u{7}\u{22}\u{2}\u{2}\u{D6}\u{D7}\u{7}\u{16}\u{2}\u{2}\u{D7}".
			"\u{D9}\u{7}\u{22}\u{2}\u{2}\u{D8}\u{D6}\u{3}\u{2}\u{2}\u{2}\u{D9}\u{DC}".
			"\u{3}\u{2}\u{2}\u{2}\u{DA}\u{D8}\u{3}\u{2}\u{2}\u{2}\u{DA}\u{DB}\u{3}".
			"\u{2}\u{2}\u{2}\u{DB}\u{35}\u{3}\u{2}\u{2}\u{2}\u{DC}\u{DA}\u{3}\u{2}".
			"\u{2}\u{2}\u{DD}\u{E6}\u{7}\u{A}\u{2}\u{2}\u{DE}\u{E3}\u{5}\u{E}\u{8}".
			"\u{2}\u{DF}\u{E0}\u{7}\u{1F}\u{2}\u{2}\u{E0}\u{E2}\u{5}\u{E}\u{8}\u{2}".
			"\u{E1}\u{DF}\u{3}\u{2}\u{2}\u{2}\u{E2}\u{E5}\u{3}\u{2}\u{2}\u{2}\u{E3}".
			"\u{E1}\u{3}\u{2}\u{2}\u{2}\u{E3}\u{E4}\u{3}\u{2}\u{2}\u{2}\u{E4}\u{E7}".
			"\u{3}\u{2}\u{2}\u{2}\u{E5}\u{E3}\u{3}\u{2}\u{2}\u{2}\u{E6}\u{DE}\u{3}".
			"\u{2}\u{2}\u{2}\u{E6}\u{E7}\u{3}\u{2}\u{2}\u{2}\u{E7}\u{E8}\u{3}\u{2}".
			"\u{2}\u{2}\u{E8}\u{E9}\u{7}\u{B}\u{2}\u{2}\u{E9}\u{37}\u{3}\u{2}\u{2}".
			"\u{2}\u{EA}\u{EB}\u{7}\u{5}\u{2}\u{2}\u{EB}\u{EC}\u{7}\u{22}\u{2}\u{2}".
			"\u{EC}\u{39}\u{3}\u{2}\u{2}\u{2}\u{ED}\u{EE}\u{7}\u{20}\u{2}\u{2}\u{EE}".
			"\u{EF}\u{5}\u{3C}\u{1F}\u{2}\u{EF}\u{3B}\u{3}\u{2}\u{2}\u{2}\u{F0}\u{F4}".
			"\u{5}\u{34}\u{1B}\u{2}\u{F1}\u{F4}\u{5}\u{14}\u{B}\u{2}\u{F2}\u{F4}\u{5}".
			"\u{1A}\u{E}\u{2}\u{F3}\u{F0}\u{3}\u{2}\u{2}\u{2}\u{F3}\u{F1}\u{3}\u{2}".
			"\u{2}\u{2}\u{F3}\u{F2}\u{3}\u{2}\u{2}\u{2}\u{F4}\u{3D}\u{3}\u{2}\u{2}".
			"\u{2}\u{F5}\u{F6}\u{7}\u{D}\u{2}\u{2}\u{F6}\u{F7}\u{5}\u{E}\u{8}\u{2}".
			"\u{F7}\u{3F}\u{3}\u{2}\u{2}\u{2}\u{1A}\u{45}\u{4D}\u{54}\u{5B}\u{63}".
			"\u{69}\u{74}\u{7C}\u{85}\u{8C}\u{95}\u{9B}\u{A5}\u{AF}\u{B2}\u{C1}\u{C6}".
			"\u{CB}\u{D1}\u{D3}\u{DA}\u{E3}\u{E6}\u{F3}";
	}
	/**
	 * @var ATN
	 */
	private static $__ATN;
	static function _ATN() : ATN { return self::$__ATN ?? (self::$__ATN = (new ATNDeserializer())->deserialize(self::_serializedATN())); }

    function logicExpression() : Contexts\LogicExpressionContext
    {
        $_localctx = new Contexts\LogicExpressionContext($this->_ctx, $this->getState());
        $this->enterRule($_localctx, 0, ExpressionParser::RULE_logicExpression);
        try {
            $this->enterOuterAlt($_localctx, 1);
            {
            $this->setState(62);
            $this->andEquation();
            $this->setState(67);
            $this->_errHandler->sync($this);
            $_la = $this->_input->LA(1);
            while ($_la === self::OR) {
            	{
            	{
            	$this->setState(63);
            	$this->match(ExpressionParser::OR);
            	$this->setState(64);
            	$this->andEquation();
            	}
            	}
            	$this->setState(69);
            	$this->_errHandler->sync($this);
            	$_la = $this->_input->LA(1);
            }
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

    function andEquation() : Contexts\AndEquationContext
    {
        $_localctx = new Contexts\AndEquationContext($this->_ctx, $this->getState());
        $this->enterRule($_localctx, 2, ExpressionParser::RULE_andEquation);
        try {
            $this->enterOuterAlt($_localctx, 1);
            {
            $this->setState(70);
            $this->equation();
            $this->setState(75);
            $this->_errHandler->sync($this);
            $_la = $this->_input->LA(1);
            while ($_la === self::AND) {
            	{
            	{
            	$this->setState(71);
            	$this->match(ExpressionParser::AND);
            	$this->setState(72);
            	$this->equation();
            	}
            	}
            	$this->setState(77);
            	$this->_errHandler->sync($this);
            	$_la = $this->_input->LA(1);
            }
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

    function equation() : Contexts\EquationContext
    {
        $_localctx = new Contexts\EquationContext($this->_ctx, $this->getState());
        $this->enterRule($_localctx, 4, ExpressionParser::RULE_equation);
        try {
            $this->enterOuterAlt($_localctx, 1);
            {
            $this->setState(78);
            $this->numericExpression();
            $this->setState(82);
            $this->_errHandler->sync($this);
            $_la = $this->_input->LA(1);
            if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & ((1 << self::GT_OR_EQ) | (1 << self::LT_OR_EQ) | (1 << self::GT) | (1 << self::LT) | (1 << self::EQ) | (1 << self::IN) | (1 << self::NOT_IN) | (1 << self::NE) | (1 << self::LIKE))) !== 0)) {
            	{
            	$this->setState(79);
            	$this->cmpOp();
            	$this->setState(80);
            	$this->numericExpression();
            	}
            }

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

    function numericExpression() : Contexts\NumericExpressionContext
    {
        $_localctx = new Contexts\NumericExpressionContext($this->_ctx, $this->getState());
        $this->enterRule($_localctx, 6, ExpressionParser::RULE_numericExpression);
        try {
            $this->enterOuterAlt($_localctx, 1);
            {
            $this->setState(84);
            $this->multiplyingExpression();
            $this->setState(89);
            $this->_errHandler->sync($this);
            $_la = $this->_input->LA(1);
            while ($_la === self::PLUS || $_la === self::MINUS) {
            	{
            	{
            	$this->setState(85);
            	$_la = $this->_input->LA(1);
            	if ( !($_la === self::PLUS || $_la === self::MINUS) ) {
            	$this->_errHandler->recoverInline($this);
            	}
            	else {
            		if ($this->_input->LA(1) === Token::EOF ) $matchedEOF = true;
            		$this->_errHandler->reportMatch($this);
            		$this->consume();
            	}
            	$this->setState(86);
            	$this->multiplyingExpression();
            	}
            	}
            	$this->setState(91);
            	$this->_errHandler->sync($this);
            	$_la = $this->_input->LA(1);
            }
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

    function multiplyingExpression() : Contexts\MultiplyingExpressionContext
    {
        $_localctx = new Contexts\MultiplyingExpressionContext($this->_ctx, $this->getState());
        $this->enterRule($_localctx, 8, ExpressionParser::RULE_multiplyingExpression);
        try {
            $this->enterOuterAlt($_localctx, 1);
            {
            $this->setState(92);
            $this->powExpression();
            $this->setState(97);
            $this->_errHandler->sync($this);
            $_la = $this->_input->LA(1);
            while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & ((1 << self::MUL) | (1 << self::DIV) | (1 << self::MOD))) !== 0)) {
            	{
            	{
            	$this->setState(93);
            	$_la = $this->_input->LA(1);
            	if ( !(((($_la) & ~0x3f) === 0 && ((1 << $_la) & ((1 << self::MUL) | (1 << self::DIV) | (1 << self::MOD))) !== 0)) ) {
            	$this->_errHandler->recoverInline($this);
            	}
            	else {
            		if ($this->_input->LA(1) === Token::EOF ) $matchedEOF = true;
            		$this->_errHandler->reportMatch($this);
            		$this->consume();
            	}
            	$this->setState(94);
            	$this->powExpression();
            	}
            	}
            	$this->setState(99);
            	$this->_errHandler->sync($this);
            	$_la = $this->_input->LA(1);
            }
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

    function powExpression() : Contexts\PowExpressionContext
    {
        $_localctx = new Contexts\PowExpressionContext($this->_ctx, $this->getState());
        $this->enterRule($_localctx, 10, ExpressionParser::RULE_powExpression);
        try {
            $this->enterOuterAlt($_localctx, 1);
            {
            $this->setState(100);
            $this->atom();
            $this->setState(103);
            $this->_errHandler->sync($this);
            $_la = $this->_input->LA(1);
            if ($_la === self::POW) {
            	{
            	$this->setState(101);
            	$this->match(ExpressionParser::POW);
            	$this->setState(102);
            	$this->atom();
            	}
            }

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

    function atom() : Contexts\AtomContext
    {
        $_localctx = new Contexts\AtomContext($this->_ctx, $this->getState());
        $this->enterRule($_localctx, 12, ExpressionParser::RULE_atom);
        try {
            $this->setState(114);
            $this->_errHandler->sync($this);
            switch ($this->getInterpreter()->adaptivePredict($this->_input, 6, $this->_ctx) ) {
            case 1:
            	$this->enterOuterAlt($_localctx, 1);
            	{
            	$this->setState(105);
            	$this->scientific();
            	}
            	break;

            case 2:
            	$this->enterOuterAlt($_localctx, 2);
            	{
            	$this->setState(106);
            	$this->string();
            	}
            	break;

            case 3:
            	$this->enterOuterAlt($_localctx, 3);
            	{
            	$this->setState(107);
            	$this->scalarVariable();
            	}
            	break;

            case 4:
            	$this->enterOuterAlt($_localctx, 4);
            	{
            	$this->setState(108);
            	$this->group();
            	}
            	break;

            case 5:
            	$this->enterOuterAlt($_localctx, 5);
            	{
            	$this->setState(109);
            	$this->listLiteral();
            	}
            	break;

            case 6:
            	$this->enterOuterAlt($_localctx, 6);
            	{
            	$this->setState(110);
            	$this->listVariable();
            	}
            	break;

            case 7:
            	$this->enterOuterAlt($_localctx, 7);
            	{
            	$this->setState(111);
            	$this->func();
            	}
            	break;

            case 8:
            	$this->enterOuterAlt($_localctx, 8);
            	{
            	$this->setState(112);
            	$this->notExpression();
            	}
            	break;

            case 9:
            	$this->enterOuterAlt($_localctx, 9);
            	{
            	$this->setState(113);
            	$this->unaryMinus();
            	}
            	break;
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

    function unaryMinus() : Contexts\UnaryMinusContext
    {
        $_localctx = new Contexts\UnaryMinusContext($this->_ctx, $this->getState());
        $this->enterRule($_localctx, 14, ExpressionParser::RULE_unaryMinus);
        try {
            $this->enterOuterAlt($_localctx, 1);
            {
            $this->setState(116);
            $this->match(ExpressionParser::MINUS);
            $this->setState(117);
            $this->minusable();
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

    function minusable() : Contexts\MinusableContext
    {
        $_localctx = new Contexts\MinusableContext($this->_ctx, $this->getState());
        $this->enterRule($_localctx, 16, ExpressionParser::RULE_minusable);
        try {
            $this->setState(122);
            $this->_errHandler->sync($this);
            switch ($this->getInterpreter()->adaptivePredict($this->_input, 7, $this->_ctx) ) {
            case 1:
            	$this->enterOuterAlt($_localctx, 1);
            	{
            	$this->setState(119);
            	$this->scalarVariable();
            	}
            	break;

            case 2:
            	$this->enterOuterAlt($_localctx, 2);
            	{
            	$this->setState(120);
            	$this->group();
            	}
            	break;

            case 3:
            	$this->enterOuterAlt($_localctx, 3);
            	{
            	$this->setState(121);
            	$this->func();
            	}
            	break;
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

    function group() : Contexts\GroupContext
    {
        $_localctx = new Contexts\GroupContext($this->_ctx, $this->getState());
        $this->enterRule($_localctx, 18, ExpressionParser::RULE_group);
        try {
            $this->enterOuterAlt($_localctx, 1);
            {
            $this->setState(124);
            $this->match(ExpressionParser::LPAREN);
            $this->setState(125);
            $this->logicExpression();
            $this->setState(126);
            $this->match(ExpressionParser::RPAREN);
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

    function scientific() : Contexts\ScientificContext
    {
        $_localctx = new Contexts\ScientificContext($this->_ctx, $this->getState());
        $this->enterRule($_localctx, 20, ExpressionParser::RULE_scientific);
        try {
            $this->enterOuterAlt($_localctx, 1);
            {
            $this->setState(128);
            $this->number();
            $this->setState(131);
            $this->_errHandler->sync($this);
            $_la = $this->_input->LA(1);
            if ($_la === self::E) {
            	{
            	$this->setState(129);
            	$this->match(ExpressionParser::E);
            	$this->setState(130);
            	$this->number();
            	}
            }

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

    function string() : Contexts\StringContext
    {
        $_localctx = new Contexts\StringContext($this->_ctx, $this->getState());
        $this->enterRule($_localctx, 22, ExpressionParser::RULE_string);
        try {
            $this->enterOuterAlt($_localctx, 1);
            {
            $this->setState(133);
            $this->match(ExpressionParser::STRING);
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

    function func() : Contexts\FuncContext
    {
        $_localctx = new Contexts\FuncContext($this->_ctx, $this->getState());
        $this->enterRule($_localctx, 24, ExpressionParser::RULE_func);
        try {
            $this->enterOuterAlt($_localctx, 1);
            {
            $this->setState(135);
            $this->funcName();
            $this->setState(136);
            $this->match(ExpressionParser::LPAREN);
            $this->setState(138);
            $this->_errHandler->sync($this);
            $_la = $this->_input->LA(1);
            if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & ((1 << self::T__0) | (1 << self::T__2) | (1 << self::STRING) | (1 << self::LPAREN) | (1 << self::LLIST) | (1 << self::MINUS) | (1 << self::NOT) | (1 << self::DIGIT) | (1 << self::ID))) !== 0)) {
            	{
            	$this->setState(137);
            	$this->parameters();
            	}
            }

            $this->setState(140);
            $this->match(ExpressionParser::RPAREN);
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

    function parameters() : Contexts\ParametersContext
    {
        $_localctx = new Contexts\ParametersContext($this->_ctx, $this->getState());
        $this->enterRule($_localctx, 26, ExpressionParser::RULE_parameters);
        try {
            $this->enterOuterAlt($_localctx, 1);
            {
            $this->setState(142);
            $this->parameter();
            $this->setState(147);
            $this->_errHandler->sync($this);
            $_la = $this->_input->LA(1);
            while ($_la === self::COMMA) {
            	{
            	{
            	$this->setState(143);
            	$this->match(ExpressionParser::COMMA);
            	$this->setState(144);
            	$this->parameter();
            	}
            	}
            	$this->setState(149);
            	$this->_errHandler->sync($this);
            	$_la = $this->_input->LA(1);
            }
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

    function parameter() : Contexts\ParameterContext
    {
        $_localctx = new Contexts\ParameterContext($this->_ctx, $this->getState());
        $this->enterRule($_localctx, 28, ExpressionParser::RULE_parameter);
        try {
            $this->enterOuterAlt($_localctx, 1);
            {
            $this->setState(153);
            $this->_errHandler->sync($this);
            switch ($this->getInterpreter()->adaptivePredict($this->_input, 11, $this->_ctx) ) {
            case 1:
            	{
            	$this->setState(150);
            	$this->paramName();
            	$this->setState(151);
            	$this->match(ExpressionParser::LET);
            	}
            	break;
            }
            $this->setState(155);
            $this->paramValue();
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

    function funcName() : Contexts\FuncNameContext
    {
        $_localctx = new Contexts\FuncNameContext($this->_ctx, $this->getState());
        $this->enterRule($_localctx, 30, ExpressionParser::RULE_funcName);
        try {
            $this->enterOuterAlt($_localctx, 1);
            {
            $this->setState(157);
            $this->match(ExpressionParser::ID);
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

    function paramName() : Contexts\ParamNameContext
    {
        $_localctx = new Contexts\ParamNameContext($this->_ctx, $this->getState());
        $this->enterRule($_localctx, 32, ExpressionParser::RULE_paramName);
        try {
            $this->enterOuterAlt($_localctx, 1);
            {
            $this->setState(159);
            $this->match(ExpressionParser::ID);
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

    function paramValue() : Contexts\ParamValueContext
    {
        $_localctx = new Contexts\ParamValueContext($this->_ctx, $this->getState());
        $this->enterRule($_localctx, 34, ExpressionParser::RULE_paramValue);
        try {
            $this->setState(163);
            $this->_errHandler->sync($this);
            switch ($this->_input->LA(1)) {
            case ExpressionParser::T__2:
            case ExpressionParser::STRING:
            case ExpressionParser::LPAREN:
            case ExpressionParser::LLIST:
            case ExpressionParser::MINUS:
            case ExpressionParser::NOT:
            case ExpressionParser::DIGIT:
            case ExpressionParser::ID:
            	$this->enterOuterAlt($_localctx, 1);
            	{
            	$this->setState(161);
            	$this->logicExpression();
            	}
            	break;
            case ExpressionParser::T__0:
            	$this->enterOuterAlt($_localctx, 2);
            	{
            	$this->setState(162);
            	$this->metaFilter();
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

    function metaFilter() : Contexts\MetaFilterContext
    {
        $_localctx = new Contexts\MetaFilterContext($this->_ctx, $this->getState());
        $this->enterRule($_localctx, 36, ExpressionParser::RULE_metaFilter);
        try {
            $this->enterOuterAlt($_localctx, 1);
            {
            $this->setState(165);
            $this->simpleFilter();
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

    function simpleFilter() : Contexts\SimpleFilterContext
    {
        $_localctx = new Contexts\SimpleFilterContext($this->_ctx, $this->getState());
        $this->enterRule($_localctx, 38, ExpressionParser::RULE_simpleFilter);
        try {
            $this->enterOuterAlt($_localctx, 1);
            {
            $this->setState(167);
            $this->match(ExpressionParser::T__0);
            $this->setState(176);
            $this->_errHandler->sync($this);
            $_la = $this->_input->LA(1);
            if ($_la === self::ID) {
            	{
            	$this->setState(168);
            	$this->simpleFilterExpression();
            	$this->setState(173);
            	$this->_errHandler->sync($this);
            	$_la = $this->_input->LA(1);
            	while ($_la === self::COMMA) {
            		{
            		{
            		$this->setState(169);
            		$this->match(ExpressionParser::COMMA);
            		$this->setState(170);
            		$this->simpleFilterExpression();
            		}
            		}
            		$this->setState(175);
            		$this->_errHandler->sync($this);
            		$_la = $this->_input->LA(1);
            	}
            	}
            }

            $this->setState(178);
            $this->match(ExpressionParser::T__1);
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

    function simpleFilterExpression() : Contexts\SimpleFilterExpressionContext
    {
        $_localctx = new Contexts\SimpleFilterExpressionContext($this->_ctx, $this->getState());
        $this->enterRule($_localctx, 40, ExpressionParser::RULE_simpleFilterExpression);
        try {
            $this->enterOuterAlt($_localctx, 1);
            {
            $this->setState(180);
            $this->simpleFilterExpressionField();
            $this->setState(181);
            $this->cmpOp();
            $this->setState(182);
            $this->simpleFilterExpressionValue();
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

    function simpleFilterExpressionField() : Contexts\SimpleFilterExpressionFieldContext
    {
        $_localctx = new Contexts\SimpleFilterExpressionFieldContext($this->_ctx, $this->getState());
        $this->enterRule($_localctx, 42, ExpressionParser::RULE_simpleFilterExpressionField);
        try {
            $this->enterOuterAlt($_localctx, 1);
            {
            $this->setState(184);
            $this->match(ExpressionParser::ID);
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

    function simpleFilterExpressionValue() : Contexts\SimpleFilterExpressionValueContext
    {
        $_localctx = new Contexts\SimpleFilterExpressionValueContext($this->_ctx, $this->getState());
        $this->enterRule($_localctx, 44, ExpressionParser::RULE_simpleFilterExpressionValue);
        try {
            $this->setState(191);
            $this->_errHandler->sync($this);
            switch ($this->_input->LA(1)) {
            case ExpressionParser::ID:
            	$this->enterOuterAlt($_localctx, 1);
            	{
            	$this->setState(186);
            	$this->scalarVariable();
            	}
            	break;
            case ExpressionParser::MINUS:
            case ExpressionParser::DIGIT:
            	$this->enterOuterAlt($_localctx, 2);
            	{
            	$this->setState(187);
            	$this->scientific();
            	}
            	break;
            case ExpressionParser::STRING:
            	$this->enterOuterAlt($_localctx, 3);
            	{
            	$this->setState(188);
            	$this->string();
            	}
            	break;
            case ExpressionParser::LLIST:
            	$this->enterOuterAlt($_localctx, 4);
            	{
            	$this->setState(189);
            	$this->listLiteral();
            	}
            	break;
            case ExpressionParser::T__2:
            	$this->enterOuterAlt($_localctx, 5);
            	{
            	$this->setState(190);
            	$this->listVariable();
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

    function cmpOp() : Contexts\CmpOpContext
    {
        $_localctx = new Contexts\CmpOpContext($this->_ctx, $this->getState());
        $this->enterRule($_localctx, 46, ExpressionParser::RULE_cmpOp);
        try {
            $this->enterOuterAlt($_localctx, 1);
            {
            $this->setState(193);
            $_la = $this->_input->LA(1);
            if ( !(((($_la) & ~0x3f) === 0 && ((1 << $_la) & ((1 << self::GT_OR_EQ) | (1 << self::LT_OR_EQ) | (1 << self::GT) | (1 << self::LT) | (1 << self::EQ) | (1 << self::IN) | (1 << self::NOT_IN) | (1 << self::NE) | (1 << self::LIKE))) !== 0)) ) {
            $this->_errHandler->recoverInline($this);
            }
            else {
            	if ($this->_input->LA(1) === Token::EOF ) $matchedEOF = true;
            	$this->_errHandler->reportMatch($this);
            	$this->consume();
            }
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

    function number() : Contexts\NumberContext
    {
        $_localctx = new Contexts\NumberContext($this->_ctx, $this->getState());
        $this->enterRule($_localctx, 48, ExpressionParser::RULE_number);
        try {
            $this->enterOuterAlt($_localctx, 1);
            {
            $this->setState(196);
            $this->_errHandler->sync($this);
            $_la = $this->_input->LA(1);
            if ($_la === self::MINUS) {
            	{
            	$this->setState(195);
            	$this->match(ExpressionParser::MINUS);
            	}
            }

            $this->setState(199); 
            $this->_errHandler->sync($this);
            $_la = $this->_input->LA(1);
            do {
            	{
            	{
            	$this->setState(198);
            	$this->match(ExpressionParser::DIGIT);
            	}
            	}
            	$this->setState(201); 
            	$this->_errHandler->sync($this);
            	$_la = $this->_input->LA(1);
            } while ( $_la === self::DIGIT );
            $this->setState(209);
            $this->_errHandler->sync($this);
            $_la = $this->_input->LA(1);
            if ($_la === self::POINT) {
            	{
            	$this->setState(203);
            	$this->match(ExpressionParser::POINT);
            	$this->setState(205); 
            	$this->_errHandler->sync($this);
            	$_la = $this->_input->LA(1);
            	do {
            		{
            		{
            		$this->setState(204);
            		$this->match(ExpressionParser::DIGIT);
            		}
            		}
            		$this->setState(207); 
            		$this->_errHandler->sync($this);
            		$_la = $this->_input->LA(1);
            	} while ( $_la === self::DIGIT );
            	}
            }

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

    function scalarVariable() : Contexts\ScalarVariableContext
    {
        $_localctx = new Contexts\ScalarVariableContext($this->_ctx, $this->getState());
        $this->enterRule($_localctx, 50, ExpressionParser::RULE_scalarVariable);
        try {
            $this->enterOuterAlt($_localctx, 1);
            {
            $this->setState(211);
            $this->match(ExpressionParser::ID);
            $this->setState(216);
            $this->_errHandler->sync($this);
            $_la = $this->_input->LA(1);
            while ($_la === self::POINT) {
            	{
            	{
            	$this->setState(212);
            	$this->match(ExpressionParser::POINT);
            	$this->setState(213);
            	$this->match(ExpressionParser::ID);
            	}
            	}
            	$this->setState(218);
            	$this->_errHandler->sync($this);
            	$_la = $this->_input->LA(1);
            }
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

    function listLiteral() : Contexts\ListLiteralContext
    {
        $_localctx = new Contexts\ListLiteralContext($this->_ctx, $this->getState());
        $this->enterRule($_localctx, 52, ExpressionParser::RULE_listLiteral);
        try {
            $this->enterOuterAlt($_localctx, 1);
            {
            $this->setState(219);
            $this->match(ExpressionParser::LLIST);
            $this->setState(228);
            $this->_errHandler->sync($this);
            $_la = $this->_input->LA(1);
            if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & ((1 << self::T__2) | (1 << self::STRING) | (1 << self::LPAREN) | (1 << self::LLIST) | (1 << self::MINUS) | (1 << self::NOT) | (1 << self::DIGIT) | (1 << self::ID))) !== 0)) {
            	{
            	$this->setState(220);
            	$this->atom();
            	$this->setState(225);
            	$this->_errHandler->sync($this);
            	$_la = $this->_input->LA(1);
            	while ($_la === self::COMMA) {
            		{
            		{
            		$this->setState(221);
            		$this->match(ExpressionParser::COMMA);
            		$this->setState(222);
            		$this->atom();
            		}
            		}
            		$this->setState(227);
            		$this->_errHandler->sync($this);
            		$_la = $this->_input->LA(1);
            	}
            	}
            }

            $this->setState(230);
            $this->match(ExpressionParser::RLIST);
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

    function listVariable() : Contexts\ListVariableContext
    {
        $_localctx = new Contexts\ListVariableContext($this->_ctx, $this->getState());
        $this->enterRule($_localctx, 54, ExpressionParser::RULE_listVariable);
        try {
            $this->enterOuterAlt($_localctx, 1);
            {
            $this->setState(232);
            $this->match(ExpressionParser::T__2);
            $this->setState(233);
            $this->match(ExpressionParser::ID);
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

    function notExpression() : Contexts\NotExpressionContext
    {
        $_localctx = new Contexts\NotExpressionContext($this->_ctx, $this->getState());
        $this->enterRule($_localctx, 56, ExpressionParser::RULE_notExpression);
        try {
            $this->enterOuterAlt($_localctx, 1);
            {
            $this->setState(235);
            $this->match(ExpressionParser::NOT);
            $this->setState(236);
            $this->notExpressionInner();
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

    function notExpressionInner() : Contexts\NotExpressionInnerContext
    {
        $_localctx = new Contexts\NotExpressionInnerContext($this->_ctx, $this->getState());
        $this->enterRule($_localctx, 58, ExpressionParser::RULE_notExpressionInner);
        try {
            $this->setState(241);
            $this->_errHandler->sync($this);
            switch ($this->getInterpreter()->adaptivePredict($this->_input, 23, $this->_ctx) ) {
            case 1:
            	$this->enterOuterAlt($_localctx, 1);
            	{
            	$this->setState(238);
            	$this->scalarVariable();
            	}
            	break;

            case 2:
            	$this->enterOuterAlt($_localctx, 2);
            	{
            	$this->setState(239);
            	$this->group();
            	}
            	break;

            case 3:
            	$this->enterOuterAlt($_localctx, 3);
            	{
            	$this->setState(240);
            	$this->func();
            	}
            	break;
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

    function minusExpression() : Contexts\MinusExpressionContext
    {
        $_localctx = new Contexts\MinusExpressionContext($this->_ctx, $this->getState());
        $this->enterRule($_localctx, 60, ExpressionParser::RULE_minusExpression);
        try {
            $this->enterOuterAlt($_localctx, 1);
            {
            $this->setState(243);
            $this->match(ExpressionParser::MINUS);
            $this->setState(244);
            $this->atom();
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
use generated\ExpressionParser;
use generated\ExpressionVisitor;

class LogicExpressionContext extends ParserRuleContext
{
	/**
	 * @return AndEquationContext[]
	 */
	function andEquation() : array
	{
		return $this->getTypedRuleContexts(AndEquationContext::class);
	}
	function andEquationAt(int $i) : ?AndEquationContext
	{
	    /** @noinspection PhpIncompatibleReturnTypeInspection */
	    return $this->getTypedRuleContext(AndEquationContext::class, $i);
	}
	function OR(int $i) : TerminalNode { return $this->getToken(ExpressionParser::OR, $i); }
	function __construct(?ParserRuleContext $parent, int $invokingState=null)
	{
		parent::__construct($parent, $invokingState);
	}

	function getRuleIndex() : int { return ExpressionParser::RULE_logicExpression; }
    function accept(ParseTreeVisitor $visitor)
    {
    	if ($visitor instanceof ExpressionVisitor) return $visitor->visitLogicExpression($this);
    	return $visitor->visitChildren($this);
    }
}

class AndEquationContext extends ParserRuleContext
{
	/**
	 * @return EquationContext[]
	 */
	function equation() : array
	{
		return $this->getTypedRuleContexts(EquationContext::class);
	}
	function equationAt(int $i) : ?EquationContext
	{
	    /** @noinspection PhpIncompatibleReturnTypeInspection */
	    return $this->getTypedRuleContext(EquationContext::class, $i);
	}
	function AND(int $i) : TerminalNode { return $this->getToken(ExpressionParser::AND, $i); }
	function __construct(?ParserRuleContext $parent, int $invokingState=null)
	{
		parent::__construct($parent, $invokingState);
	}

	function getRuleIndex() : int { return ExpressionParser::RULE_andEquation; }
    function accept(ParseTreeVisitor $visitor)
    {
    	if ($visitor instanceof ExpressionVisitor) return $visitor->visitAndEquation($this);
    	return $visitor->visitChildren($this);
    }
}

class EquationContext extends ParserRuleContext
{
	/**
	 * @return NumericExpressionContext[]
	 */
	function numericExpression() : array
	{
		return $this->getTypedRuleContexts(NumericExpressionContext::class);
	}
	function numericExpressionAt(int $i) : ?NumericExpressionContext
	{
	    /** @noinspection PhpIncompatibleReturnTypeInspection */
	    return $this->getTypedRuleContext(NumericExpressionContext::class, $i);
	}
	function cmpOp() : ?CmpOpContext
	{
	    /** @noinspection PhpIncompatibleReturnTypeInspection */
		return $this->getTypedRuleContext(CmpOpContext::class, 0);
	}
	function __construct(?ParserRuleContext $parent, int $invokingState=null)
	{
		parent::__construct($parent, $invokingState);
	}

	function getRuleIndex() : int { return ExpressionParser::RULE_equation; }
    function accept(ParseTreeVisitor $visitor)
    {
    	if ($visitor instanceof ExpressionVisitor) return $visitor->visitEquation($this);
    	return $visitor->visitChildren($this);
    }
}

class NumericExpressionContext extends ParserRuleContext
{
	/**
	 * @return MultiplyingExpressionContext[]
	 */
	function multiplyingExpression() : array
	{
		return $this->getTypedRuleContexts(MultiplyingExpressionContext::class);
	}
	function multiplyingExpressionAt(int $i) : ?MultiplyingExpressionContext
	{
	    /** @noinspection PhpIncompatibleReturnTypeInspection */
	    return $this->getTypedRuleContext(MultiplyingExpressionContext::class, $i);
	}
	function PLUS(int $i) : TerminalNode { return $this->getToken(ExpressionParser::PLUS, $i); }
	function MINUS(int $i) : TerminalNode { return $this->getToken(ExpressionParser::MINUS, $i); }
	function __construct(?ParserRuleContext $parent, int $invokingState=null)
	{
		parent::__construct($parent, $invokingState);
	}

	function getRuleIndex() : int { return ExpressionParser::RULE_numericExpression; }
    function accept(ParseTreeVisitor $visitor)
    {
    	if ($visitor instanceof ExpressionVisitor) return $visitor->visitNumericExpression($this);
    	return $visitor->visitChildren($this);
    }
}

class MultiplyingExpressionContext extends ParserRuleContext
{
	/**
	 * @return PowExpressionContext[]
	 */
	function powExpression() : array
	{
		return $this->getTypedRuleContexts(PowExpressionContext::class);
	}
	function powExpressionAt(int $i) : ?PowExpressionContext
	{
	    /** @noinspection PhpIncompatibleReturnTypeInspection */
	    return $this->getTypedRuleContext(PowExpressionContext::class, $i);
	}
	function MUL(int $i) : TerminalNode { return $this->getToken(ExpressionParser::MUL, $i); }
	function DIV(int $i) : TerminalNode { return $this->getToken(ExpressionParser::DIV, $i); }
	function MOD(int $i) : TerminalNode { return $this->getToken(ExpressionParser::MOD, $i); }
	function __construct(?ParserRuleContext $parent, int $invokingState=null)
	{
		parent::__construct($parent, $invokingState);
	}

	function getRuleIndex() : int { return ExpressionParser::RULE_multiplyingExpression; }
    function accept(ParseTreeVisitor $visitor)
    {
    	if ($visitor instanceof ExpressionVisitor) return $visitor->visitMultiplyingExpression($this);
    	return $visitor->visitChildren($this);
    }
}

class PowExpressionContext extends ParserRuleContext
{
	/**
	 * @return AtomContext[]
	 */
	function atom() : array
	{
		return $this->getTypedRuleContexts(AtomContext::class);
	}
	function atomAt(int $i) : ?AtomContext
	{
	    /** @noinspection PhpIncompatibleReturnTypeInspection */
	    return $this->getTypedRuleContext(AtomContext::class, $i);
	}
	function POW() : TerminalNode { return $this->getToken(ExpressionParser::POW, 0); }
	function __construct(?ParserRuleContext $parent, int $invokingState=null)
	{
		parent::__construct($parent, $invokingState);
	}

	function getRuleIndex() : int { return ExpressionParser::RULE_powExpression; }
    function accept(ParseTreeVisitor $visitor)
    {
    	if ($visitor instanceof ExpressionVisitor) return $visitor->visitPowExpression($this);
    	return $visitor->visitChildren($this);
    }
}

class AtomContext extends ParserRuleContext
{
	function scientific() : ?ScientificContext
	{
	    /** @noinspection PhpIncompatibleReturnTypeInspection */
		return $this->getTypedRuleContext(ScientificContext::class, 0);
	}
	function string() : ?StringContext
	{
	    /** @noinspection PhpIncompatibleReturnTypeInspection */
		return $this->getTypedRuleContext(StringContext::class, 0);
	}
	function scalarVariable() : ?ScalarVariableContext
	{
	    /** @noinspection PhpIncompatibleReturnTypeInspection */
		return $this->getTypedRuleContext(ScalarVariableContext::class, 0);
	}
	function group() : ?GroupContext
	{
	    /** @noinspection PhpIncompatibleReturnTypeInspection */
		return $this->getTypedRuleContext(GroupContext::class, 0);
	}
	function listLiteral() : ?ListLiteralContext
	{
	    /** @noinspection PhpIncompatibleReturnTypeInspection */
		return $this->getTypedRuleContext(ListLiteralContext::class, 0);
	}
	function listVariable() : ?ListVariableContext
	{
	    /** @noinspection PhpIncompatibleReturnTypeInspection */
		return $this->getTypedRuleContext(ListVariableContext::class, 0);
	}
	function func() : ?FuncContext
	{
	    /** @noinspection PhpIncompatibleReturnTypeInspection */
		return $this->getTypedRuleContext(FuncContext::class, 0);
	}
	function notExpression() : ?NotExpressionContext
	{
	    /** @noinspection PhpIncompatibleReturnTypeInspection */
		return $this->getTypedRuleContext(NotExpressionContext::class, 0);
	}
	function unaryMinus() : ?UnaryMinusContext
	{
	    /** @noinspection PhpIncompatibleReturnTypeInspection */
		return $this->getTypedRuleContext(UnaryMinusContext::class, 0);
	}
	function __construct(?ParserRuleContext $parent, int $invokingState=null)
	{
		parent::__construct($parent, $invokingState);
	}

	function getRuleIndex() : int { return ExpressionParser::RULE_atom; }
    function accept(ParseTreeVisitor $visitor)
    {
    	if ($visitor instanceof ExpressionVisitor) return $visitor->visitAtom($this);
    	return $visitor->visitChildren($this);
    }
}

class UnaryMinusContext extends ParserRuleContext
{
	function MINUS() : TerminalNode { return $this->getToken(ExpressionParser::MINUS, 0); }
	function minusable() : ?MinusableContext
	{
	    /** @noinspection PhpIncompatibleReturnTypeInspection */
		return $this->getTypedRuleContext(MinusableContext::class, 0);
	}
	function __construct(?ParserRuleContext $parent, int $invokingState=null)
	{
		parent::__construct($parent, $invokingState);
	}

	function getRuleIndex() : int { return ExpressionParser::RULE_unaryMinus; }
    function accept(ParseTreeVisitor $visitor)
    {
    	if ($visitor instanceof ExpressionVisitor) return $visitor->visitUnaryMinus($this);
    	return $visitor->visitChildren($this);
    }
}

class MinusableContext extends ParserRuleContext
{
	function scalarVariable() : ?ScalarVariableContext
	{
	    /** @noinspection PhpIncompatibleReturnTypeInspection */
		return $this->getTypedRuleContext(ScalarVariableContext::class, 0);
	}
	function group() : ?GroupContext
	{
	    /** @noinspection PhpIncompatibleReturnTypeInspection */
		return $this->getTypedRuleContext(GroupContext::class, 0);
	}
	function func() : ?FuncContext
	{
	    /** @noinspection PhpIncompatibleReturnTypeInspection */
		return $this->getTypedRuleContext(FuncContext::class, 0);
	}
	function __construct(?ParserRuleContext $parent, int $invokingState=null)
	{
		parent::__construct($parent, $invokingState);
	}

	function getRuleIndex() : int { return ExpressionParser::RULE_minusable; }
    function accept(ParseTreeVisitor $visitor)
    {
    	if ($visitor instanceof ExpressionVisitor) return $visitor->visitMinusable($this);
    	return $visitor->visitChildren($this);
    }
}

class GroupContext extends ParserRuleContext
{
	function LPAREN() : TerminalNode { return $this->getToken(ExpressionParser::LPAREN, 0); }
	function logicExpression() : ?LogicExpressionContext
	{
	    /** @noinspection PhpIncompatibleReturnTypeInspection */
		return $this->getTypedRuleContext(LogicExpressionContext::class, 0);
	}
	function RPAREN() : TerminalNode { return $this->getToken(ExpressionParser::RPAREN, 0); }
	function __construct(?ParserRuleContext $parent, int $invokingState=null)
	{
		parent::__construct($parent, $invokingState);
	}

	function getRuleIndex() : int { return ExpressionParser::RULE_group; }
    function accept(ParseTreeVisitor $visitor)
    {
    	if ($visitor instanceof ExpressionVisitor) return $visitor->visitGroup($this);
    	return $visitor->visitChildren($this);
    }
}

class ScientificContext extends ParserRuleContext
{
	/**
	 * @return NumberContext[]
	 */
	function number() : array
	{
		return $this->getTypedRuleContexts(NumberContext::class);
	}
	function numberAt(int $i) : ?NumberContext
	{
	    /** @noinspection PhpIncompatibleReturnTypeInspection */
	    return $this->getTypedRuleContext(NumberContext::class, $i);
	}
	function E() : TerminalNode { return $this->getToken(ExpressionParser::E, 0); }
	function __construct(?ParserRuleContext $parent, int $invokingState=null)
	{
		parent::__construct($parent, $invokingState);
	}

	function getRuleIndex() : int { return ExpressionParser::RULE_scientific; }
    function accept(ParseTreeVisitor $visitor)
    {
    	if ($visitor instanceof ExpressionVisitor) return $visitor->visitScientific($this);
    	return $visitor->visitChildren($this);
    }
}

class StringContext extends ParserRuleContext
{
	function STRING() : TerminalNode { return $this->getToken(ExpressionParser::STRING, 0); }
	function __construct(?ParserRuleContext $parent, int $invokingState=null)
	{
		parent::__construct($parent, $invokingState);
	}

	function getRuleIndex() : int { return ExpressionParser::RULE_string; }
    function accept(ParseTreeVisitor $visitor)
    {
    	if ($visitor instanceof ExpressionVisitor) return $visitor->visitString($this);
    	return $visitor->visitChildren($this);
    }
}

class FuncContext extends ParserRuleContext
{
	function funcName() : ?FuncNameContext
	{
	    /** @noinspection PhpIncompatibleReturnTypeInspection */
		return $this->getTypedRuleContext(FuncNameContext::class, 0);
	}
	function LPAREN() : TerminalNode { return $this->getToken(ExpressionParser::LPAREN, 0); }
	function RPAREN() : TerminalNode { return $this->getToken(ExpressionParser::RPAREN, 0); }
	function parameters() : ?ParametersContext
	{
	    /** @noinspection PhpIncompatibleReturnTypeInspection */
		return $this->getTypedRuleContext(ParametersContext::class, 0);
	}
	function __construct(?ParserRuleContext $parent, int $invokingState=null)
	{
		parent::__construct($parent, $invokingState);
	}

	function getRuleIndex() : int { return ExpressionParser::RULE_func; }
    function accept(ParseTreeVisitor $visitor)
    {
    	if ($visitor instanceof ExpressionVisitor) return $visitor->visitFunc($this);
    	return $visitor->visitChildren($this);
    }
}

class ParametersContext extends ParserRuleContext
{
	/**
	 * @return ParameterContext[]
	 */
	function parameter() : array
	{
		return $this->getTypedRuleContexts(ParameterContext::class);
	}
	function parameterAt(int $i) : ?ParameterContext
	{
	    /** @noinspection PhpIncompatibleReturnTypeInspection */
	    return $this->getTypedRuleContext(ParameterContext::class, $i);
	}
	function COMMA(int $i) : TerminalNode { return $this->getToken(ExpressionParser::COMMA, $i); }
	function __construct(?ParserRuleContext $parent, int $invokingState=null)
	{
		parent::__construct($parent, $invokingState);
	}

	function getRuleIndex() : int { return ExpressionParser::RULE_parameters; }
    function accept(ParseTreeVisitor $visitor)
    {
    	if ($visitor instanceof ExpressionVisitor) return $visitor->visitParameters($this);
    	return $visitor->visitChildren($this);
    }
}

class ParameterContext extends ParserRuleContext
{
	function paramValue() : ?ParamValueContext
	{
	    /** @noinspection PhpIncompatibleReturnTypeInspection */
		return $this->getTypedRuleContext(ParamValueContext::class, 0);
	}
	function paramName() : ?ParamNameContext
	{
	    /** @noinspection PhpIncompatibleReturnTypeInspection */
		return $this->getTypedRuleContext(ParamNameContext::class, 0);
	}
	function LET() : TerminalNode { return $this->getToken(ExpressionParser::LET, 0); }
	function __construct(?ParserRuleContext $parent, int $invokingState=null)
	{
		parent::__construct($parent, $invokingState);
	}

	function getRuleIndex() : int { return ExpressionParser::RULE_parameter; }
    function accept(ParseTreeVisitor $visitor)
    {
    	if ($visitor instanceof ExpressionVisitor) return $visitor->visitParameter($this);
    	return $visitor->visitChildren($this);
    }
}

class FuncNameContext extends ParserRuleContext
{
	function ID() : TerminalNode { return $this->getToken(ExpressionParser::ID, 0); }
	function __construct(?ParserRuleContext $parent, int $invokingState=null)
	{
		parent::__construct($parent, $invokingState);
	}

	function getRuleIndex() : int { return ExpressionParser::RULE_funcName; }
    function accept(ParseTreeVisitor $visitor)
    {
    	if ($visitor instanceof ExpressionVisitor) return $visitor->visitFuncName($this);
    	return $visitor->visitChildren($this);
    }
}

class ParamNameContext extends ParserRuleContext
{
	function ID() : TerminalNode { return $this->getToken(ExpressionParser::ID, 0); }
	function __construct(?ParserRuleContext $parent, int $invokingState=null)
	{
		parent::__construct($parent, $invokingState);
	}

	function getRuleIndex() : int { return ExpressionParser::RULE_paramName; }
    function accept(ParseTreeVisitor $visitor)
    {
    	if ($visitor instanceof ExpressionVisitor) return $visitor->visitParamName($this);
    	return $visitor->visitChildren($this);
    }
}

class ParamValueContext extends ParserRuleContext
{
	function logicExpression() : ?LogicExpressionContext
	{
	    /** @noinspection PhpIncompatibleReturnTypeInspection */
		return $this->getTypedRuleContext(LogicExpressionContext::class, 0);
	}
	function metaFilter() : ?MetaFilterContext
	{
	    /** @noinspection PhpIncompatibleReturnTypeInspection */
		return $this->getTypedRuleContext(MetaFilterContext::class, 0);
	}
	function __construct(?ParserRuleContext $parent, int $invokingState=null)
	{
		parent::__construct($parent, $invokingState);
	}

	function getRuleIndex() : int { return ExpressionParser::RULE_paramValue; }
    function accept(ParseTreeVisitor $visitor)
    {
    	if ($visitor instanceof ExpressionVisitor) return $visitor->visitParamValue($this);
    	return $visitor->visitChildren($this);
    }
}

class MetaFilterContext extends ParserRuleContext
{
	function simpleFilter() : ?SimpleFilterContext
	{
	    /** @noinspection PhpIncompatibleReturnTypeInspection */
		return $this->getTypedRuleContext(SimpleFilterContext::class, 0);
	}
	function __construct(?ParserRuleContext $parent, int $invokingState=null)
	{
		parent::__construct($parent, $invokingState);
	}

	function getRuleIndex() : int { return ExpressionParser::RULE_metaFilter; }
    function accept(ParseTreeVisitor $visitor)
    {
    	if ($visitor instanceof ExpressionVisitor) return $visitor->visitMetaFilter($this);
    	return $visitor->visitChildren($this);
    }
}

class SimpleFilterContext extends ParserRuleContext
{
	/**
	 * @return SimpleFilterExpressionContext[]
	 */
	function simpleFilterExpression() : array
	{
		return $this->getTypedRuleContexts(SimpleFilterExpressionContext::class);
	}
	function simpleFilterExpressionAt(int $i) : ?SimpleFilterExpressionContext
	{
	    /** @noinspection PhpIncompatibleReturnTypeInspection */
	    return $this->getTypedRuleContext(SimpleFilterExpressionContext::class, $i);
	}
	function COMMA(int $i) : TerminalNode { return $this->getToken(ExpressionParser::COMMA, $i); }
	function __construct(?ParserRuleContext $parent, int $invokingState=null)
	{
		parent::__construct($parent, $invokingState);
	}

	function getRuleIndex() : int { return ExpressionParser::RULE_simpleFilter; }
    function accept(ParseTreeVisitor $visitor)
    {
    	if ($visitor instanceof ExpressionVisitor) return $visitor->visitSimpleFilter($this);
    	return $visitor->visitChildren($this);
    }
}

class SimpleFilterExpressionContext extends ParserRuleContext
{
	function simpleFilterExpressionField() : ?SimpleFilterExpressionFieldContext
	{
	    /** @noinspection PhpIncompatibleReturnTypeInspection */
		return $this->getTypedRuleContext(SimpleFilterExpressionFieldContext::class, 0);
	}
	function cmpOp() : ?CmpOpContext
	{
	    /** @noinspection PhpIncompatibleReturnTypeInspection */
		return $this->getTypedRuleContext(CmpOpContext::class, 0);
	}
	function simpleFilterExpressionValue() : ?SimpleFilterExpressionValueContext
	{
	    /** @noinspection PhpIncompatibleReturnTypeInspection */
		return $this->getTypedRuleContext(SimpleFilterExpressionValueContext::class, 0);
	}
	function __construct(?ParserRuleContext $parent, int $invokingState=null)
	{
		parent::__construct($parent, $invokingState);
	}

	function getRuleIndex() : int { return ExpressionParser::RULE_simpleFilterExpression; }
    function accept(ParseTreeVisitor $visitor)
    {
    	if ($visitor instanceof ExpressionVisitor) return $visitor->visitSimpleFilterExpression($this);
    	return $visitor->visitChildren($this);
    }
}

class SimpleFilterExpressionFieldContext extends ParserRuleContext
{
	function ID() : TerminalNode { return $this->getToken(ExpressionParser::ID, 0); }
	function __construct(?ParserRuleContext $parent, int $invokingState=null)
	{
		parent::__construct($parent, $invokingState);
	}

	function getRuleIndex() : int { return ExpressionParser::RULE_simpleFilterExpressionField; }
    function accept(ParseTreeVisitor $visitor)
    {
    	if ($visitor instanceof ExpressionVisitor) return $visitor->visitSimpleFilterExpressionField($this);
    	return $visitor->visitChildren($this);
    }
}

class SimpleFilterExpressionValueContext extends ParserRuleContext
{
	function scalarVariable() : ?ScalarVariableContext
	{
	    /** @noinspection PhpIncompatibleReturnTypeInspection */
		return $this->getTypedRuleContext(ScalarVariableContext::class, 0);
	}
	function scientific() : ?ScientificContext
	{
	    /** @noinspection PhpIncompatibleReturnTypeInspection */
		return $this->getTypedRuleContext(ScientificContext::class, 0);
	}
	function string() : ?StringContext
	{
	    /** @noinspection PhpIncompatibleReturnTypeInspection */
		return $this->getTypedRuleContext(StringContext::class, 0);
	}
	function listLiteral() : ?ListLiteralContext
	{
	    /** @noinspection PhpIncompatibleReturnTypeInspection */
		return $this->getTypedRuleContext(ListLiteralContext::class, 0);
	}
	function listVariable() : ?ListVariableContext
	{
	    /** @noinspection PhpIncompatibleReturnTypeInspection */
		return $this->getTypedRuleContext(ListVariableContext::class, 0);
	}
	function __construct(?ParserRuleContext $parent, int $invokingState=null)
	{
		parent::__construct($parent, $invokingState);
	}

	function getRuleIndex() : int { return ExpressionParser::RULE_simpleFilterExpressionValue; }
    function accept(ParseTreeVisitor $visitor)
    {
    	if ($visitor instanceof ExpressionVisitor) return $visitor->visitSimpleFilterExpressionValue($this);
    	return $visitor->visitChildren($this);
    }
}

class CmpOpContext extends ParserRuleContext
{
	function EQ() : TerminalNode { return $this->getToken(ExpressionParser::EQ, 0); }
	function GT() : TerminalNode { return $this->getToken(ExpressionParser::GT, 0); }
	function LT() : TerminalNode { return $this->getToken(ExpressionParser::LT, 0); }
	function GT_OR_EQ() : TerminalNode { return $this->getToken(ExpressionParser::GT_OR_EQ, 0); }
	function LT_OR_EQ() : TerminalNode { return $this->getToken(ExpressionParser::LT_OR_EQ, 0); }
	function IN() : TerminalNode { return $this->getToken(ExpressionParser::IN, 0); }
	function NOT_IN() : TerminalNode { return $this->getToken(ExpressionParser::NOT_IN, 0); }
	function NE() : TerminalNode { return $this->getToken(ExpressionParser::NE, 0); }
	function LIKE() : TerminalNode { return $this->getToken(ExpressionParser::LIKE, 0); }
	function __construct(?ParserRuleContext $parent, int $invokingState=null)
	{
		parent::__construct($parent, $invokingState);
	}

	function getRuleIndex() : int { return ExpressionParser::RULE_cmpOp; }
    function accept(ParseTreeVisitor $visitor)
    {
    	if ($visitor instanceof ExpressionVisitor) return $visitor->visitCmpOp($this);
    	return $visitor->visitChildren($this);
    }
}

class NumberContext extends ParserRuleContext
{
	function MINUS() : TerminalNode { return $this->getToken(ExpressionParser::MINUS, 0); }
	function DIGIT(int $i) : TerminalNode { return $this->getToken(ExpressionParser::DIGIT, $i); }
	function POINT() : TerminalNode { return $this->getToken(ExpressionParser::POINT, 0); }
	function __construct(?ParserRuleContext $parent, int $invokingState=null)
	{
		parent::__construct($parent, $invokingState);
	}

	function getRuleIndex() : int { return ExpressionParser::RULE_number; }
    function accept(ParseTreeVisitor $visitor)
    {
    	if ($visitor instanceof ExpressionVisitor) return $visitor->visitNumber($this);
    	return $visitor->visitChildren($this);
    }
}

class ScalarVariableContext extends ParserRuleContext
{
	function ID(int $i) : TerminalNode { return $this->getToken(ExpressionParser::ID, $i); }
	function POINT(int $i) : TerminalNode { return $this->getToken(ExpressionParser::POINT, $i); }
	function __construct(?ParserRuleContext $parent, int $invokingState=null)
	{
		parent::__construct($parent, $invokingState);
	}

	function getRuleIndex() : int { return ExpressionParser::RULE_scalarVariable; }
    function accept(ParseTreeVisitor $visitor)
    {
    	if ($visitor instanceof ExpressionVisitor) return $visitor->visitScalarVariable($this);
    	return $visitor->visitChildren($this);
    }
}

class ListLiteralContext extends ParserRuleContext
{
	function LLIST() : TerminalNode { return $this->getToken(ExpressionParser::LLIST, 0); }
	function RLIST() : TerminalNode { return $this->getToken(ExpressionParser::RLIST, 0); }
	/**
	 * @return AtomContext[]
	 */
	function atom() : array
	{
		return $this->getTypedRuleContexts(AtomContext::class);
	}
	function atomAt(int $i) : ?AtomContext
	{
	    /** @noinspection PhpIncompatibleReturnTypeInspection */
	    return $this->getTypedRuleContext(AtomContext::class, $i);
	}
	function COMMA(int $i) : TerminalNode { return $this->getToken(ExpressionParser::COMMA, $i); }
	function __construct(?ParserRuleContext $parent, int $invokingState=null)
	{
		parent::__construct($parent, $invokingState);
	}

	function getRuleIndex() : int { return ExpressionParser::RULE_listLiteral; }
    function accept(ParseTreeVisitor $visitor)
    {
    	if ($visitor instanceof ExpressionVisitor) return $visitor->visitListLiteral($this);
    	return $visitor->visitChildren($this);
    }
}

class ListVariableContext extends ParserRuleContext
{
	function ID() : TerminalNode { return $this->getToken(ExpressionParser::ID, 0); }
	function __construct(?ParserRuleContext $parent, int $invokingState=null)
	{
		parent::__construct($parent, $invokingState);
	}

	function getRuleIndex() : int { return ExpressionParser::RULE_listVariable; }
    function accept(ParseTreeVisitor $visitor)
    {
    	if ($visitor instanceof ExpressionVisitor) return $visitor->visitListVariable($this);
    	return $visitor->visitChildren($this);
    }
}

class NotExpressionContext extends ParserRuleContext
{
	function NOT() : TerminalNode { return $this->getToken(ExpressionParser::NOT, 0); }
	function notExpressionInner() : ?NotExpressionInnerContext
	{
	    /** @noinspection PhpIncompatibleReturnTypeInspection */
		return $this->getTypedRuleContext(NotExpressionInnerContext::class, 0);
	}
	function __construct(?ParserRuleContext $parent, int $invokingState=null)
	{
		parent::__construct($parent, $invokingState);
	}

	function getRuleIndex() : int { return ExpressionParser::RULE_notExpression; }
    function accept(ParseTreeVisitor $visitor)
    {
    	if ($visitor instanceof ExpressionVisitor) return $visitor->visitNotExpression($this);
    	return $visitor->visitChildren($this);
    }
}

class NotExpressionInnerContext extends ParserRuleContext
{
	function scalarVariable() : ?ScalarVariableContext
	{
	    /** @noinspection PhpIncompatibleReturnTypeInspection */
		return $this->getTypedRuleContext(ScalarVariableContext::class, 0);
	}
	function group() : ?GroupContext
	{
	    /** @noinspection PhpIncompatibleReturnTypeInspection */
		return $this->getTypedRuleContext(GroupContext::class, 0);
	}
	function func() : ?FuncContext
	{
	    /** @noinspection PhpIncompatibleReturnTypeInspection */
		return $this->getTypedRuleContext(FuncContext::class, 0);
	}
	function __construct(?ParserRuleContext $parent, int $invokingState=null)
	{
		parent::__construct($parent, $invokingState);
	}

	function getRuleIndex() : int { return ExpressionParser::RULE_notExpressionInner; }
    function accept(ParseTreeVisitor $visitor)
    {
    	if ($visitor instanceof ExpressionVisitor) return $visitor->visitNotExpressionInner($this);
    	return $visitor->visitChildren($this);
    }
}

class MinusExpressionContext extends ParserRuleContext
{
	function MINUS() : TerminalNode { return $this->getToken(ExpressionParser::MINUS, 0); }
	function atom() : ?AtomContext
	{
	    /** @noinspection PhpIncompatibleReturnTypeInspection */
		return $this->getTypedRuleContext(AtomContext::class, 0);
	}
	function __construct(?ParserRuleContext $parent, int $invokingState=null)
	{
		parent::__construct($parent, $invokingState);
	}

	function getRuleIndex() : int { return ExpressionParser::RULE_minusExpression; }
    function accept(ParseTreeVisitor $visitor)
    {
    	if ($visitor instanceof ExpressionVisitor) return $visitor->visitMinusExpression($this);
    	return $visitor->visitChildren($this);
    }
}
