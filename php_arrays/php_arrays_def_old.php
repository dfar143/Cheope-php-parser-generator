<?
require_once("Lex_rules_container.php");
require_once("php_arrays_parser_grammar_rules.php");
require_once("Parser_grammar_rules_container.php");

define('PHP_ARRAYS_DEF_TOKEN_VAL_ARRAY',"Array");
define('PHP_ARRAYS_DEF_TOKEN_VAL_ITEM',"Item");
define('PHP_ARRAYS_DEF_TOKEN_VAL_ITEM1',"Item1");
define('PHP_ARRAYS_DEF_TOKEN_VAL_ITEM2',"Item2");
define('PHP_ARRAYS_DEF_TOKEN_VAL_NUM',"Num");
define('PHP_ARRAYS_DEF_TOKEN_VAL_ARROW',"Arrow");
define('PHP_ARRAYS_DEF_TOKEN_VAL_OPEN_PAR',"Open_par");
define('PHP_ARRAYS_DEF_TOKEN_VAL_CLOSE_PAR',"Close_par");
define('PHP_ARRAYS_DEF_TOKEN_VAL_APICE',"Apice");
define('PHP_ARRAYS_DEF_TOKEN_VAL_DOPPIO_APICE',"Doppio_apice");
define('PHP_ARRAYS_DEF_TOKEN_VAL_VIRGOLA',"Virgola");
define('PHP_ARRAYS_DEF_TOKEN_VAL_WS',"Ws");
define('PHP_ARRAYS_DEF_TOKEN_VAL_CONST',"Const");

define('PHP_ARRAYS_DEF_TOKEN_ATTR_KEY',"Key");
define('PHP_ARRAYS_DEF_TOKEN_ATTR_VAL',"Val");

define('PHP_ARRAYS_DEF_RULE_NAME_SUFFIX',"rule");

define('PHP_ARRAYS_DEF_ARRAY_RULE',PHP_ARRAYS_DEF_TOKEN_VAL_ARRAY . 
STRING_UNDERSCORE . PHP_ARRAYS_DEF_RULE_NAME_SUFFIX);
define('PHP_ARRAYS_DEF_ITEM_RULE',PHP_ARRAYS_DEF_TOKEN_VAL_ITEM . 
STRING_UNDERSCORE . PHP_ARRAYS_DEF_RULE_NAME_SUFFIX);
define('PHP_ARRAYS_DEF_WS_RULE',PHP_ARRAYS_DEF_TOKEN_VAL_WS . 
STRING_UNDERSCORE . PHP_ARRAYS_DEF_RULE_NAME_SUFFIX);
define('PHP_ARRAYS_DEF_NUM_RULE',PHP_ARRAYS_DEF_TOKEN_VAL_NUM . 
STRING_UNDERSCORE . PHP_ARRAYS_DEF_RULE_NAME_SUFFIX);
define('PHP_ARRAYS_DEF_ARROW_RULE',PHP_ARRAYS_DEF_TOKEN_VAL_ARROW . 
STRING_UNDERSCORE . PHP_ARRAYS_DEF_RULE_NAME_SUFFIX);
define('PHP_ARRAYS_DEF_OPEN_PAR_RULE',PHP_ARRAYS_DEF_TOKEN_VAL_OPEN_PAR . 
STRING_UNDERSCORE . PHP_ARRAYS_DEF_RULE_NAME_SUFFIX);
define('PHP_ARRAYS_DEF_CLOSE_PAR_RULE',PHP_ARRAYS_DEF_TOKEN_VAL_CLOSE_PAR . 
STRING_UNDERSCORE . PHP_ARRAYS_DEF_RULE_NAME_SUFFIX);
define('PHP_ARRAYS_DEF_APICE_RULE',PHP_ARRAYS_DEF_TOKEN_VAL_APICE . 
STRING_UNDERSCORE . PHP_ARRAYS_DEF_RULE_NAME_SUFFIX);
define('PHP_ARRAYS_DEF_DOPPIO_APICE_RULE',PHP_ARRAYS_DEF_TOKEN_VAL_DOPPIO_APICE .
STRING_UNDERSCORE . PHP_ARRAYS_DEF_RULE_NAME_SUFFIX);
define('PHP_ARRAYS_DEF_VIRGOLA_RULE',PHP_ARRAYS_DEF_TOKEN_VAL_VIRGOLA . 
STRING_UNDERSCORE . PHP_ARRAYS_DEF_RULE_NAME_SUFFIX);

$reservedWords = array();

$specialItems = array(PHP_ARRAYS_DEF_TOKEN_VAL_VIRGOLA,PHP_ARRAYS_DEF_TOKEN_VAL_ARROW,
PHP_ARRAYS_DEF_TOKEN_VAL_OPEN_PAR,PHP_ARRAYS_DEF_TOKEN_VAL_CLOSE_PAR,
PHP_ARRAYS_DEF_TOKEN_VAL_APICE,PHP_ARRAYS_DEF_TOKEN_VAL_DOPPIO_APICE);

define('PHP_ARRAYS_DEF_LEX_RULE_1',"Regola1");
define('PHP_ARRAYS_DEF_LEX_RULE_2',"Regola2");
define('PHP_ARRAYS_DEF_LEX_RULE_3',"Regola3");
define('PHP_ARRAYS_DEF_LEX_RULE_4',"Regola4");
define('PHP_ARRAYS_DEF_LEX_RULE_5',"Regola5");
define('PHP_ARRAYS_DEF_LEX_RULE_6',"Regola6");
define('PHP_ARRAYS_DEF_LEX_RULE_7',"Regola7");
define('PHP_ARRAYS_DEF_LEX_RULE_8',"Regola8");
define('PHP_ARRAYS_DEF_LEX_RULE_9',"Regola9");
define('PHP_ARRAYS_DEF_LEX_RULE_10',"Regola10");
define('PHP_ARRAYS_DEF_LEX_RULE_11',"Regola11");
define('PHP_ARRAYS_DEF_LEX_RULE_12',"Regola12");
define('PHP_ARRAYS_DEF_LEX_RULE_13',"Regola13");
define('PHP_ARRAYS_DEF_LEX_RULE_14',"Regola14");
define('PHP_ARRAYS_DEF_LEX_RULE_15',"Regola15");
define('PHP_ARRAYS_DEF_LEX_RULE_16',"Regola16");
define('PHP_ARRAYS_DEF_LEX_RULE_17',"Regola17");
define('PHP_ARRAYS_DEF_LEX_RULE_18',"Regola18");
define('PHP_ARRAYS_DEF_LEX_RULE_19',"Regola19");
define('PHP_ARRAYS_DEF_LEX_RULE_20',"Regola20");
define('PHP_ARRAYS_DEF_LEX_RULE_21',"Regola21");
define('PHP_ARRAYS_DEF_LEX_RULE_22',"Regola22");
define('PHP_ARRAYS_DEF_LEX_RULE_23',"Regola23");
define('PHP_ARRAYS_DEF_LEX_RULE_24',"Regola_24");

define('PHP_ARRAYS_DEF_LEX_RULE_CONTAINER_1',"Contenitore_regole_1");

define('PHP_ARRAYS_DEF_PARSER_RULE_1',"Regola_grammaticale_1");
define('PHP_ARRAYS_DEF_PARSER_GRAMMAR_RULE_CONTAINER_1',"Contenitore_regole_grammaticali_1");

$rule1 = new Lex_rule(PHP_ARRAYS_DEF_LEX_RULE_1);
$rule2 = new Lex_rule(PHP_ARRAYS_DEF_LEX_RULE_2);
$rule3 = new Lex_rule(PHP_ARRAYS_DEF_LEX_RULE_3);
$rule4 = new Lex_rule(PHP_ARRAYS_DEF_LEX_RULE_4);
$rule5 = new Lex_rule(PHP_ARRAYS_DEF_LEX_RULE_5);
$rule6 = new Lex_rule(PHP_ARRAYS_DEF_LEX_RULE_6);
$rule7 = new Lex_rule(PHP_ARRAYS_DEF_LEX_RULE_7);
$rule8 = new Lex_rule(PHP_ARRAYS_DEF_LEX_RULE_8);
$rule9 = new Lex_rule(PHP_ARRAYS_DEF_LEX_RULE_9);
$rule10 = new Lex_rule(PHP_ARRAYS_DEF_LEX_RULE_10);
$rule11 = new Lex_rule(PHP_ARRAYS_DEF_LEX_RULE_11);
$rule12 = new Lex_rule(PHP_ARRAYS_DEF_LEX_RULE_12);
$rule13 = new Lex_rule(PHP_ARRAYS_DEF_LEX_RULE_13);
$rule14 = new Lex_rule(PHP_ARRAYS_DEF_LEX_RULE_14);
$rule15 = new Lex_rule(PHP_ARRAYS_DEF_LEX_RULE_15);
$rule16 = new Lex_rule(PHP_ARRAYS_DEF_LEX_RULE_16);
$rule17 = new Lex_rule(PHP_ARRAYS_DEF_LEX_RULE_17);
$rule18 = new Lex_rule(PHP_ARRAYS_DEF_LEX_RULE_18);
$rule19 = new Lex_rule(PHP_ARRAYS_DEF_LEX_RULE_19);
$rule20 = new Lex_rule(PHP_ARRAYS_DEF_LEX_RULE_20);
$rule21 = new Lex_rule(PHP_ARRAYS_DEF_LEX_RULE_21);
$rule22 = new Lex_rule(PHP_ARRAYS_DEF_LEX_RULE_22);
$rule23 = new Lex_rule(PHP_ARRAYS_DEF_LEX_RULE_23);
$rule24 = new Lex_rule(PHP_ARRAYS_DEF_LEX_RULE_24);

// Le regole devono essere tutte ancorate ^
// A parità di lexema viene considerata la regola 
// posta per prima.
//
$rule1->setRegexp("/^[Aa]rray/i");
$rule1->setTokenType(Token::TYPE_RESERVED_WORD);
$rule1->setTokenVal(PHP_ARRAYS_DEF_TOKEN_VAL_ARRAY);

$rule2->setRegexp("/^=>/i");
$rule2->setTokenType(Token::TYPE_SPECIAL_ITEM);
$rule2->setTokenVal(PHP_ARRAYS_DEF_TOKEN_VAL_ARROW);

$rule3->setRegexp("/^\(/i");
$rule3->setTokenType(Token::TYPE_SPECIAL_ITEM);
$rule3->setTokenVal(PHP_ARRAYS_DEF_TOKEN_VAL_OPEN_PAR);

$rule4->setRegexp("/^\)/i");
$rule4->setTokenType(Token::TYPE_SPECIAL_ITEM);
$rule4->setTokenVal(PHP_ARRAYS_DEF_TOKEN_VAL_CLOSE_PAR);

/*$rule5->setRegexp("/^'/i");
$rule5->setTokenType(Token::TYPE_SPECIAL_ITEM);
$rule5->setTokenVal(PHP_ARRAYS_DEF_TOKEN_VAL_APICE);

$rule6->setRegexp("/^\"/i");
$rule6->setTokenType(Token::TYPE_SPECIAL_ITEM);
$rule6->setTokenVal(PHP_ARRAYS_DEF_TOKEN_VAL_DOPPIO_APICE);*/

$rule5->setRegexp("/^,/i");
$rule5->setTokenType(Token::TYPE_SPECIAL_ITEM);
$rule5->setTokenVal(PHP_ARRAYS_DEF_TOKEN_VAL_VIRGOLA);

$rule6->setRegexp("/^[\s]+/i");
$rule6->setTokenType(Token::TYPE_DELIM);
$rule6->setTokenVal(PHP_ARRAYS_DEF_TOKEN_VAL_WS);

//$rule10->setRegexp("/^[a-zA-Z0-9_,:\\.;\\\\\|!£\$%&\/\(\)=\?\^\[\]@#\+\-\*]*/i");
//$rule10->setTokenType(Token::TYPE_LEXICAL_ELEMENT);
//$rule10->setTokenVal(TOKEN_VAL_ITEM);

$rule7->setRegexp("/^'(?:[^'\\\\]|(?:\\\\\\\\)|(?:\\\\\\\\)*\\\\.{1})*'/i");
$rule7->setTokenType(Token::TYPE_LEXICAL_ELEMENT);
$rule7->setTokenVal(PHP_ARRAYS_DEF_TOKEN_VAL_ITEM1);

$rule8->setRegexp("/^\"(?:[^\"\\\\]|(?:\\\\\\\\)|(?:\\\\\\\\)*\\\\.{1})*\"/i");
$rule8->setTokenType(Token::TYPE_LEXICAL_ELEMENT);
$rule8->setTokenVal(PHP_ARRAYS_DEF_TOKEN_VAL_ITEM2);

$rule9->setRegexp("/^[0-9][0-9]*/i");
$rule9->setTokenType(Token::TYPE_LEXICAL_ELEMENT);
$rule9->setTokenVal(PHP_ARRAYS_DEF_TOKEN_VAL_NUM);

$rule10->setRegexp("/^[A-Z@_]+/");
$rule10->setTokenType(Token::TYPE_LEXICAL_ELEMENT);
$rule10->setTokenVal(PHP_ARRAYS_DEF_TOKEN_VAL_CONST);


$phpArraysDefRules = new Lex_rules_container(PHP_ARRAYS_DEF_LEX_RULE_CONTAINER_1);
$phpArraysDefRules->add($rule1);
$phpArraysDefRules->add($rule2);
$phpArraysDefRules->add($rule3);
$phpArraysDefRules->add($rule4);
$phpArraysDefRules->add($rule5);
$phpArraysDefRules->add($rule6);
$phpArraysDefRules->add($rule7);
$phpArraysDefRules->add($rule8);
$phpArraysDefRules->add($rule9);
$phpArraysDefRules->add($rule10);
//$phpArraysDefRules->add($rule11);
//$rules->add($rule12);

$phpArraysDefGrRule1 = new Parser_grammar_rule_a();

$phpArraysDefGrRules = new Parser_grammar_rules_container(PHP_ARRAYS_DEF_PARSER_GRAMMAR_RULE_CONTAINER_1);
$phpArraysDefGrRules->add($phpArraysDefGrRule1);

?>