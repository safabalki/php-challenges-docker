<?php 

class Bracket
{
	/**
     * Start of bracket character type 
     *
     * @var sting
     */
	public $startOfBracketType = "";

	/**
     * End of bracket character type
     *
     * @var sting
     */
	public $endOfBracketType	= "";

	public $startOfBracketCount = 0;
	public $endOfBracketCount 	= 0;

	function __construct($startOfBracketType = "", $endOfBracketType = "")
	{
		$this->startOfBracketType 	= $startOfBracketType;
		$this->endOfBracketType 	= $endOfBracketType;
	}

	/**
     * Calculates the count of starting and ending brackets
     *
     * @return int
     */
	public function checkBracketCount()
	{
		return abs($this->startOfBracketCount - $this->endOfBracketCount);
	}
}
?>