# About

There are two challenges in this project.

1. StringChallenge is a php structure that returns and sorts the words in a given string according to the last letter.
   - It takes a string parameter and returns a result as an array.
   - If there are two words with the same last letter, these words are listed in order in the sentence.
   - When given a parameter not string type, it is return "Hatalı Parametre"
2. BracketsChallenge check if the parentheses in a given string are written correctly It is a php class.If there is a character other than 3 types of parenthesis [, {, (, ), }, ] in the given string it is return error
   - If all parentheses are written correctly and closed, "Başarılı",
   - If the parentheses are not balanced and there are unclosed parentheses, "Başarısız",
   - If there are more than 10 unclosed parentheses, "Çok Fazla Kapanmamış Parantez Var",
   - When given a parameter not string type, it is return "Hatalı Parametre"

# Installation
Clone project.

```bash
git clone https://github.com/safabalki/php-challenges.git
```

Open the project directory.
```bash
cd php-challenges
```
Install and launch Docker

```bash
docker-compose up
```

Install dependencies:

```bash
composer install
```

# Usage
To use the bindings, use Composer's autoload:

```bash
require_once('./vendor/autoload.php');
```

```php
$stringChallenge = new StringChallenge();
$stringChallenge->sortStringArrByLastWord("Yazılım geliştirmek ve algoritma üretmek çok zevkli bir iş");

$bracketChallenge = new BracketsChallenge();
$bracketChallenge->checkBrackets("{{{}[]}}");

```
# Testing

Install dependencies as mentioned above (which will resolve [PHPUnit](https://packagist.org/packages/phpunit/phpunit)), then you can run the test suite:
```bash
./vendor/bin/phpunit tests
```
