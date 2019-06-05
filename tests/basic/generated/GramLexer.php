<?php
// Generated from Gram.g4 by ANTLR 4.7.2

namespace generated;

use \Antlr4\Atn\ATNDeserializer;
use \Antlr4\Atn\LexerATNSimulator;
use \Antlr4\Lexer;
use \Antlr4\CharStream;
use \Antlr4\Predictioncontexts\PredictionContextCache;
use \Antlr4\Atn\Atn;
use \Antlr4\Dfa\DFA;
use \Antlr4\Vocabulary;
use \Antlr4\VocabularyImpl;

class GramLexer extends Lexer
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

	/**
	 * @var PredictionContextCache
	 */
	private static $__sharedContextCache;
	protected static function _sharedContextCache() : PredictionContextCache { return self::$__sharedContextCache ?: (self::$__sharedContextCache = new PredictionContextCache()); }

	const T__0=1, T__1=2, T__2=3, T__3=4, T__4=5, T__5=6;



	static $channelNames = [ "DEFAULT_TOKEN_CHANNEL", "HIDDEN" ];

	static $modeNames = [ "DEFAULT_MODE" ];

	private static function makeRuleNames() : \ArrayObject
	{
		return new \ArrayObject([ "T__0", "T__1", "T__2", "T__3", "T__4", "T__5" ]);
	}

	private static $_ruleNames;
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


	function __construct(CharStream $input)
	{
		parent::__construct($input);
		$this->_interp = new LexerATNSimulator($this, self::_ATN(), self::_decisionToDFA(), self::_sharedContextCache());
	}

	function getGrammarFileName() : string { return "Gram.g4"; }

	/**
	 * @return string[]|\ArrayObject
	 */
	function getRuleNames() : \ArrayObject { return self::ruleNames(); }

	function getSerializedATN() : string { return self::_serializedATN(); }

	/**
	 * @return string[] 
	 */
	function getChannelNames() : array { return self::$channelNames; }

	/**
	 * @return string[] 
	 */
	function getModeNames() : array { return self::$modeNames; }

	function getATN() : ATN { return self::_ATN(); }

	static function _serializedATN() : string
	{
		return
			"\u{3}\u{608B}\u{A72A}\u{8133}\u{B9ED}\u{417C}\u{3BE7}\u{7786}\u{5964}".
			"\u{2}\u{8}\u{1D}\u{8}\u{1}\u{4}\u{2}\u{9}\u{2}\u{4}\u{3}\u{9}\u{3}\u{4}".
			"\u{4}\u{9}\u{4}\u{4}\u{5}\u{9}\u{5}\u{4}\u{6}\u{9}\u{6}\u{4}\u{7}\u{9}".
			"\u{7}\u{3}\u{2}\u{3}\u{2}\u{3}\u{3}\u{3}\u{3}\u{3}\u{4}\u{3}\u{4}\u{3}".
			"\u{5}\u{3}\u{5}\u{3}\u{6}\u{3}\u{6}\u{3}\u{7}\u{3}\u{7}\u{3}\u{7}\u{3}".
			"\u{7}\u{2}\u{2}\u{8}\u{3}\u{3}\u{5}\u{4}\u{7}\u{5}\u{9}\u{6}\u{B}\u{7}".
			"\u{D}\u{8}\u{3}\u{2}\u{2}\u{2}\u{1C}\u{2}\u{3}\u{3}\u{2}\u{2}\u{2}\u{2}".
			"\u{5}\u{3}\u{2}\u{2}\u{2}\u{2}\u{7}\u{3}\u{2}\u{2}\u{2}\u{2}\u{9}\u{3}".
			"\u{2}\u{2}\u{2}\u{2}\u{B}\u{3}\u{2}\u{2}\u{2}\u{2}\u{D}\u{3}\u{2}\u{2}".
			"\u{2}\u{3}\u{F}\u{3}\u{2}\u{2}\u{2}\u{5}\u{11}\u{3}\u{2}\u{2}\u{2}\u{7}".
			"\u{13}\u{3}\u{2}\u{2}\u{2}\u{9}\u{15}\u{3}\u{2}\u{2}\u{2}\u{B}\u{17}".
			"\u{3}\u{2}\u{2}\u{2}\u{D}\u{19}\u{3}\u{2}\u{2}\u{2}\u{F}\u{10}\u{7}\u{64}".
			"\u{2}\u{2}\u{10}\u{4}\u{3}\u{2}\u{2}\u{2}\u{11}\u{12}\u{7}\u{65}\u{2}".
			"\u{2}\u{12}\u{6}\u{3}\u{2}\u{2}\u{2}\u{13}\u{14}\u{7}\u{7A}\u{2}\u{2}".
			"\u{14}\u{8}\u{3}\u{2}\u{2}\u{2}\u{15}\u{16}\u{7}\u{7B}\u{2}\u{2}\u{16}".
			"\u{A}\u{3}\u{2}\u{2}\u{2}\u{17}\u{18}\u{7}\u{2C}\u{2}\u{2}\u{18}\u{C}".
			"\u{3}\u{2}\u{2}\u{2}\u{19}\u{1A}\u{7}\u{68}\u{2}\u{2}\u{1A}\u{1B}\u{7}".
			"\u{71}\u{2}\u{2}\u{1B}\u{1C}\u{7}\u{71}\u{2}\u{2}\u{1C}\u{E}\u{3}\u{2}".
			"\u{2}\u{2}\u{3}\u{2}\u{2}";
	}
	/**
	 * @var ATN
	 */
	private static $__ATN;
	static function _ATN() : ATN { return self::$__ATN ?: (self::$__ATN = (new ATNDeserializer())->deserialize(self::_serializedATN())); }
}