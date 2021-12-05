<?php 

require './vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class BracketsChallengeTest extends TestCase
{
	public function testCheckBracketsSuccessCase()
	{
		$bracketChallenge = new BracketsChallenge();
		$message = "Başarılı";
		$this->assertEquals($message, $bracketChallenge->checkBrackets("{{{}[]}}"));
	}

	public function testCheckBracketsErrorCase()
	{
		$bracketChallenge = new BracketsChallenge();
		$message = "Başarısız";
		$this->assertEquals($message, $bracketChallenge->checkBrackets("{[]{}(}))"));
	}

	public function testCheckBracketsWarningCase()
	{
		$bracketChallenge = new BracketsChallenge();
		$message = "Çok Fazla Kapanmamış Parantez Var";
		$this->assertEquals($message, $bracketChallenge->checkBrackets("{{{[[[[[(((({{)]}"));
	}

	public function testCheckBracketsInvalidParam()
	{
		$bracketChallenge = new BracketsChallenge();
		$message = "Hatalı Parametre";
		$this->assertEquals($message, $bracketChallenge->checkBrackets("{{{[[[[[(((s({{)]}"));
	}
}

?>