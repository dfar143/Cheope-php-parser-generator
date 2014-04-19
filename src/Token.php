<?
class Token
{
 const TYPE_RESERVED_WORD="Reserved_word";
 const TYPE_LEXICAL_ELEMENT="Lexical_element";
 const TYPE_SPECIAL_ITEM="Special_item";
 const TYPE_DELIM="Delim";
 const VAL_SUFFIX="VAL";
 const TYPE_SUFFIX="TYPE";	

 var $type;
 var $val;
 var $attribute;
 var $lexema;
 
 function Token($actType="",$actVal="")
 {
 	$this->type = $actType;
 	$this->val = $actVal;
 }
 
 function setLexema($actLexema)
 {
 	$this->lexema = $actLexema;
 }
 
 function getLexema()
 {
 	return $this->lexema;
 }
 
 function setType($actType)
 {
 	$this->type = $actType;
 }
 
 function getType()
 {
 	return $this->type;
 }
 
 function setVal($actVal)
 {
 	$this->val = $actVal;
 }
 
 function getVal()
 {
 	return $this->val;
 }
 
 function setAttribute($actAttr)
 {
 	$this->attribute = $actAttr;
 }
 
 function getAttribute()
 {
 	return $this->attribute;
 }
 
}

?>