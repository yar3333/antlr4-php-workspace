grammar Expression;

logicExpression : andEquation (OR andEquation)*;
andEquation : equation (AND equation)*;

equation : numericExpression (cmpOp numericExpression)?;

numericExpression : multiplyingExpression ((PLUS | MINUS) multiplyingExpression)*;
multiplyingExpression : powExpression ((MUL | DIV | MOD) powExpression)*;
powExpression : atom (POW atom)?;

atom
   : scientific
   | string
   | scalarVariable
   | group
   | listLiteral
   | listVariable
   | func
   | notExpression
   | unaryMinus
   ;

unaryMinus : MINUS minusable;

minusable
	: scalarVariable
	| group
	| func;

group : LPAREN logicExpression RPAREN;

scientific : number (E number)?;

string : STRING;

func : funcName LPAREN parameters? RPAREN;

parameters : parameter (COMMA parameter)*;
parameter : (paramName LET)? paramValue;

funcName : ID;
paramName : ID;
paramValue : logicExpression | metaFilter;

metaFilter : simpleFilter;

simpleFilter : '{' ( simpleFilterExpression (COMMA simpleFilterExpression)* )? '}';
simpleFilterExpression : simpleFilterExpressionField cmpOp simpleFilterExpressionValue;
simpleFilterExpressionField : ID;
simpleFilterExpressionValue : scalarVariable | scientific | string | listLiteral | listVariable;

cmpOp : EQ | GT | LT | GT_OR_EQ | LT_OR_EQ | IN | NOT_IN | NE | LIKE;

number : MINUS? DIGIT+ (POINT DIGIT+)?;

scalarVariable : ID ('.' ID)*;

listLiteral : LLIST (atom (COMMA atom)*)? RLIST;

listVariable : '@' ID;

notExpression : NOT notExpressionInner;

notExpressionInner
	: scalarVariable
	| group
	| func;

minusExpression : MINUS atom;

STRING : '"'  ([\\] ('\u0000'..'\uFFFE') | ~[\\"])* '"'
       | '\'' ([\\] ('\u0000'..'\uFFFE') | ~[\\'])* '\'';

LET : '=';
LPAREN : '(';
RPAREN : ')';
LLIST : '[';
RLIST : ']';
PLUS : '+';
MINUS : '-';
MUL : '*';
DIV : '/';
MOD : '%';
GT_OR_EQ : '>=';
LT_OR_EQ : '<=';
GT : '>';
LT : '<';
EQ : '==';
POINT : '.';
IN : 'IN';
NOT_IN : 'NOT' WS 'IN';
NE : '<>' | '!=';
LIKE : 'LIKE';

E : 'e' | 'E';

POW : '^';

OR : 'OR' | '||';
AND : 'AND' | '&&';

COMMA : ',';

NOT : 'NOT' | '!';

DIGIT : ('0' .. '9');
ID : [a-zA-Z_] [a-zA-Z0-9_]*;
WS : [ \r\n\t] + -> channel (HIDDEN);
