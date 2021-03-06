<?
require_once("../src/Lex_rules_container.php");
require_once("../src/Parser_grammar_rules_container.php");
require_once("Example_1_parser_grammar_rules.php");

define('EXAMPLE_1_TOKEN_VAL_A',"a");
define('EXAMPLE_1_TOKEN_VAL_B',"b");

define('EXAMPLE_1_TOKEN_ATTR_ATTR1',"Attr1");
define('EXAMPLE_1_TOKEN_ATTR_ATTR2',"Attr2");

define('EXAMPLE_1_RULE_NAME_SUFFIX',"rule");

define('EXAMPLE_1_A_RULE',EXAMPLE_1_TOKEN_VAL_A . EXAMPLE_1_RULE_NAME_SUFFIX);
define('EXAMPLE_1_B_RULE',EXAMPLE_1_TOKEN_VAL_B . EXAMPLE_1_RULE_NAME_SUFFIX);

$example1Rule0=new Lex_rule("regola0");
$example1Rule1=new Lex_rule("regola1");

$example1Rule0->setRegexp("/^a/");
$example1Rule0->setTokenType(Token::TYPE_LEXICAL_ELEMENT);
$example1Rule0->setTokenVal(EXAMPLE_1_TOKEN_VAL_A);

$example1Rule1->setRegexp("/^b/");
$example1Rule1->setTokenType(Token::TYPE_LEXICAL_ELEMENT);
$example1Rule1->setTokenVal(EXAMPLE_1_TOKEN_VAL_B);

define('EXAMPLE_1_LEX_RULE_CONTAINER_0',"Contenitore_regole_0");

$example1DefRules=new Lex_rules_container(EXAMPLE_1_LEX_RULE_CONTAINER_0);
$example1DefRules->add($example1Rule0);
$example1DefRules->add($example1Rule1);

$example1RulesArray=array($example1DefRules);

define('EXAMPLE_1_PARSER_GRAMMAR_RULE_CONTAINER_1',"Contenitore_regole_grammaticali_1");

$example1DefGrRule0=new Parser_grammar_rule_a();

$example1DefGrRules=new Parser_grammar_rules_container(EXAMPLE_1_PARSER_GRAMMAR_RULE_CONTAINER_1);
$example1DefGrRules->add($example1DefGrRule0);

define('EXAMPLE_1_TOKEN_VAL_C',"c");



define('EXAMPLE_1_C_RULE',EXAMPLE_1_TOKEN_VAL_C . EXAMPLE_1_RULE_NAME_SUFFIX);

$example1Rule0_1=new Lex_rule("regola0");
$example1Rule1_1=new Lex_rule("regola1");

$example1Rule0_1->setRegexp("/^b/");
$example1Rule0_1->setTokenType(Token::TYPE_LEXICAL_ELEMENT);
$example1Rule0_1->setTokenVal(EXAMPLE_1_TOKEN_VAL_B);

$example1Rule1_1->setRegexp("/^c/");
$example1Rule1_1->setTokenType(Token::TYPE_LEXICAL_ELEMENT);
$example1Rule1_1->setTokenVal(EXAMPLE_1_TOKEN_VAL_C);

define('EXAMPLE_1_LEX_RULE_CONTAINER_1',"Contenitore_regole_1");

$example1DefRules1=new Lex_rules_container(EXAMPLE_1_LEX_RULE_CONTAINER_1);
$example1DefRules1->add($example1Rule0_1);
$example1DefRules1->add($example1Rule1_1);

$example1RulesArray[]=$example1DefRules1;


$example1DefGrRule1=new Parser_grammar_rule_b();

$example1DefGrRules->add($example1DefGrRule1);

?>