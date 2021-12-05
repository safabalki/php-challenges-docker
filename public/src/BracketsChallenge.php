<?php 

include 'Bracket.php';

class BracketsChallenge
{	
	/**
     * Square bracket character type 
     *
     * @var Bracket
     */
	public $squareBracket;

	/**
     * Curly bracket character type 
     *
     * @var Bracket
     */
	public $curlyBracket;

	/**
     * Round bracket character type 
     *
     * @var Bracket
     */
	public $roundBracket;

	public function checkBrackets($text = '')
	{
		$this->squareBracket = new Bracket("[","]");
		$this->curlyBracket  = new Bracket("{","}");
		$this->roundBracket  = new Bracket("(",")");
		
		$charArr = str_split($text);

		foreach ($charArr as $char) {
			switch ($char) {
				case $this->squareBracket->startOfBracketType:
					$this->squareBracket->startOfBracketCount++;
					break;
				case $this->squareBracket->endOfBracketType:
					$this->squareBracket->endOfBracketCount++;
					break;
				case $this->curlyBracket->startOfBracketType:
					$this->curlyBracket->startOfBracketCount++;
					break;
				case $this->curlyBracket->endOfBracketType:
					$this->curlyBracket->endOfBracketCount++;
					break;
				case $this->roundBracket->startOfBracketType:
					$this->roundBracket->startOfBracketCount++;
					break;
				case $this->roundBracket->endOfBracketType:
					$this->roundBracket->endOfBracketCount++;
					break;
				default:
					return "Hatalı Parametre";
					exit;
					break;
			}
		}

		$squareBracketCount = $this->squareBracket->checkBracketCount();
		$curlyBracketCount  = $this->curlyBracket->checkBracketCount();
		$roundBracketCount  = $this->roundBracket->checkBracketCount();

		if($squareBracketCount == 0 && $curlyBracketCount == 0 && $roundBracketCount == 0){
			return "Başarılı";
		}else if( ($squareBracketCount + $curlyBracketCount + $roundBracketCount) > 10){
			return "Çok Fazla Kapanmamış Parantez Var";
		}else{
			return "Başarısız";
		}

	}
}
?>