<?php

require_once('./vendor/autoload.php');
$stringChallenge = new StringChallenge();
$stringChallenge->sortStringArrByLastWord("Yazılım geliştirmek ve algoritma üretmek çok zevkli bir iş");

$bracketChallenge = new BracketsChallenge();
$bracketChallenge->checkBrackets("{{{}[]}}");

?>