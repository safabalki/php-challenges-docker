<?php 

require './vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class StringChallengeTest extends TestCase
{
	public function testSortStringArrByLastWord()
	{
		$stringChallenge = new StringChallenge();
		$strArr = array('yapacak', 'yazılım', 'bugün', 'bir', 'Mehmet');
		$this->assertEquals($strArr, $stringChallenge->sortStringArrByLastWord("Mehmet bugün bir yazılım yapacak"));
	}

	public function testSortStringArrBySameLastWord()
	{
		$stringChallenge = new StringChallenge();
		$strArr = array('algoritma', 've', 'zevkli', 'geliştirmek', 'üretmek', 'çok', 'Yazılım', 'bir', 'iş');
		$this->assertEquals($strArr, $stringChallenge->sortStringArrByLastWord("Yazılım geliştirmek ve algoritma üretmek çok zevkli bir iş"));
	}

	public function testSortStringArrByEmptyStr()
	{
		$stringChallenge = new StringChallenge();
		$strArr = array('');
		$this->assertEquals($strArr, $stringChallenge->sortStringArrByLastWord(""));
	}

	public function testSortStringArrByInvalidParam()
	{
		$stringChallenge = new StringChallenge();
		$errMessage = "Hatalı Parametre";
		$this->assertEquals($errMessage, $stringChallenge->sortStringArrByLastWord(123));
	}
	
}

?>