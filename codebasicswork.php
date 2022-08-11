1
<?php

echo 'Hello, World!';?>

2
<?php

print_r('King in the North!');?>

3
<?php

// You know nothing, Jon Snow!.?>

4
<?php

print_r('Robert');
print_r('Stannis');
print_r('Renly');?>

5
<?php

echo '9780262531962';?>

6
<?php 

print_r('What Is Dead May Never Die');?>

7
<?php

print_r(81 / 9);?>

8
<?php

print_r(6 - -81);?>

9
<?php

print_r(3**5);
print_r(-8/-4);?>

10
<?php

print_r(8 / 2 + 5 - -3 / 2);?>

11
<?php

print_r(70 * (3 + 4) / (8 + 2));?>

12
<?php

print_r((5 ** 2) - (3 * 7));?>

13
<?php

print_r('"Khal Drogo\'s favorite word is "athjahakar""');?>

14
<?php

print_r("- Did Joffrey agree?\n- He did. He also said \"I love using \\n\".");?>

15
<?php

print_r("Winter came for the House " . "of Frey.");?>

16
<?php

print_r(chr(126));
print_r(chr(94));
print_r(chr(37));?>

17
<?php

print_r(-0.304);?>

18
<?php

print_r('7' -(-8 - -2));?>

19
<?php

print_r((string) ((int) 2.9) . ' times');?>

20
<?php

$motto = 'What Is Dead May Never Die!';
print_r($motto);?>

21
<?php

$name = 'Brienna';

$name = 'anneirB';

print_r($name);?>

22
<?php

$numberofbrothers = '2';

print_r($numberofbrothers);?>

23
<?php

$family = 'Targaryen';

$pet = 'Dragon';

print_r($family);
print_r(' and ');
print_r($pet);?>

24
<?php

$eurosCount = 100;
$dollarCount = $eurosCount * 1.25;
$rubelsCost = $dollarCount * 60;

print_r($dollarCount);
print_r("\n");
print_r($rubelsCost);?>

25
<?php

$info = "We couldn't verify you mother's maiden name.";
$intro = "\nHere is important information about your account security.";

$firstName = 'Joffrey';
$greeting = 'Hello';

print_r($greeting . ', ' . $firstName . '!');
print_r($intro . "\n" . $info);?>

26
<?php

$firstNumber = 1.10;
$secondNumber = -100;

print_r($FirstNumber * $SecondNumber);?>

27
<?php

$king = 'King Balon the 6th';
$numberOfCastles = 6;
$numberOfRooms = 17;

print_r($king . ' has ' . ($numberOfCastles * $numberOfRooms) . ' rooms.');?>

28
<?php

const DRAGONS_BORN_COUNT = 3;?>

29
<?php

print_r(__DIR__);?>

30
<?php

$stark = 'Arya';

print_r("Do you want to eat, {$stark}?");?>

31
<?php

$one = 'Naharis';
$two = 'Mormont';
$three = 'Sand';

print_r("{$one[2]}{$two[1]}{$three[3]}{$two[4]}{$two[2]}");?>

32
<?php

$str =<<<EOT
Lannister, Targaryen, Baratheon, Stark, Tyrell... they're all just spokes on a wheel.
This one's on top, then that one's on top, and on and on it spins, crushing those on the ground.
EOT;

print_r($str);?>

33
<?php

$company1 = 'Apple';
$company2 = 'Samsung';

$company1Sum = strlen($company1);
$company2Sum = strlen($company2);

print_r($company1Sum + $company2Sum);?>

34
<?php

$text = 'mount';

print_r(ucfirst($text));?>

35
<?php

$number = 10.1234;

print_r(round($number, 2));?>

36
<?php

$text = 'Never forget what you are, for surely the world will not';
$textResult = "First: {$text[0]}\nLast: {$text[strlen($text) -1]}";

print_r($textResult);?>

37
<?php

$min = min(3, 10, 22, -3, 0);

print_r($min);?>

38
<?php

$min = 1;
$max = 6;

print_r(rand($min, $max));?>

39
<?php

$motto = 'Family, Duty, Honor';

print_r(gettype($motto));?>

40
<?php

namespace HexletBasics\DefineFunctions\Define;

function printMotto()
{
    print_r("Winter is coming");
};?>

41
<?php

namespace HexletBasics\DefineFunctions\ReturnInstruction;

function sayHurrayThreeTimes()
{
    $word = 'hurray!';
    return "{$word} {$word} {$word}";
};?>

42
<?php

namespace HexletBasics\DefineFunctions\Parameters;

function truncate($str, $length){
    $cuttedString = substr($str, 0, $length);
    return "{$cuttedString}...";
}?>

43
<?php

namespace HexletBasics\DefineFunctions\DefaultArguments;

function getHiddenCard($cardNumber, $y = 4){
    $hiddenCatd = substr($cardNumber, 12);
    return str_repeat('*', $y) . $hiddenCatd;
}?>

44
<?php

namespace HexletBasics\DefineFunctions\ReadingDocumentation;

function getAge($a = 10, $b = 9.1, $c = 8.9, $d = 8.5){
    $ageFloor = floor($a);
    return $ageFloor;
};?>

45
<?php

namespace HexletBasics\Logic\BoolType;

function isPensioner($age){
    return $age >= 60;
}

var_dump(isPensioner(60));?>

46
<?php

namespace HexletBasics\Logic\Predicates;

function isMister($str){
    return $str === 'Mister';
}

var_dump(isMister('Mister'));?>

47
<?php

namespace HexletBasics\Logic\CombineExpressions;

function isInternationalPhone($number){
    return $number[0] === '+';
}?>

48
<?php

namespace HexletBasics\Logic\LogicalOperators;

function isLeapYear($year){
    return $year % 400 === 0 || ($year % 4 === 0 && $year % 100 !== 0);
}?>

49
<?php

namespace HexletBasics\Logic\LogicalNegation;

use function HexletBasics\Functions\mb_strrev;

function isPalindrome($word){
    $loverWord = strtolower($word);
    return $loverWord === strrev($loverWord);
}

function isNotPalindrome($word)
{
    return !isPalindrome($word);
}?>

50
<?php

namespace HexletBasics\Logic\LogicalOperators2;

function isNeutralSoldier($colorArmor, $colorShield){
    return $colorArmor !== 'red' && $colorShield === 'black';
}?>

51


52


53


54


56


57


58


59


60


61


62


63


64


65


66


67


68


69


70


71


72


73


74


75