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
<?php

namespace HexletBasics\Logic\WeakTyping;

function isFalsy($value){
    return false == $value;
}?>

52
<?php

namespace HexletBasics\Conditionals\IfStatement;

function guessNumber($number){
    if ($number === 42){
        return 'You win!';
    };
    return 'Try again!';
}?>

53
<?php

namespace HexletBasics\Conditionals\IfElse;

function normalizeUrl($url){
    if (strpos($url, 'http://') === 0){
        $domain = substr($url, 7);
    } else {
        $domain = $url;
    }
    return "https://{$domain}";
}?>

54
<?php

namespace HexletBasics\Conditionals\ElseIfStatement;

function whoIsThisHouseToStarks($name)
{
    if ($name === 'Karstark' || $name === 'Tully') {
        return 'friend';
    } elseif ($name === 'Lannister' || $name === 'Frey') {
        return 'enemy';
    }

    return 'neutral';
}?>

55
<?php

namespace HexletBasics\Logic\TernaryOperator;

function flipFlop($str){
    if ($str === 'flip'){
        return 'flop';
    }
    return 'flip';
}?>

56
<?php

namespace HexletBasics\Conditionals\SwitchStatement;

function getNumberExplanation($number){
    switch ($number){
        case 7:
            return 'prime number';
        case 42:
            return 'answer for everything';
        case 666:
            return 'devil number';
        default:
            return null;
    }
}?>

57
<?php

namespace HexletBasics\Conditionals\Elvis;

function generateAmount($products, $price){
    $cost = $products ?: ($price * 3);
    return $cost;
}?>

58
<?php

namespace HexletBasics\Loops\WhileLoop;

function printNumbers($firstNumber)
{
    $i = $firstNumber;

    while ($i >= 1) {
        print_r($i);
        print_r("\n");
        $i = $i - 1;
    }
    print_r('finished!');
}?>

59
<?php

namespace HexletBasics\Loops\AgregationNumber;

function multiplyNumbersFromRange($firstNumber, $lastNumber)
{
    $i = $firstNumber;
    $mult = 1;

    while ($i <= $lastNumber){
        $mult = $mult * $i;
        $i = $i + 1;
    }
    return $mult;
};?>

60
<?php

namespace HexletBasics\Loops\AgregationString;

function joinNumbersFromRange($firsrt, $second)
{
    $result = '';
    $i = $firsrt;

    while ($i <= $second){
        $result = "{$result}{$i}";
        $i = $i + 1;
    }

    return $result;
};?>

61
<?php

namespace HexletBasics\Loops\IterationOverString;

function printReversedWordBySymbol($word)
{
    $i = strlen($word) - 1;

    while ($i >= 0) {
        print_r("$word[$i]\n");
        $i = $i - 1;
    }
}?>

62
<?php

namespace HexletBasics\Loops\ConditionsInsideLoops;

function countChars($str, $char)
{
    $i = 0;
    $count = 0;
    while ($i < strlen($str)) {
        if (strtolower($str[$i]) === strtolower($char)) {
            $count = $count + 1;
        }
        $i = $i + 1;
    }

    return $count;
}?>

63
<?php

namespace HexletBasics\Loops\ReverseString;

function mysubstr($str, $length)
{
    $i = 0;
    $result = '';

    while ($i < $length) {
        $currentChar = $str[$i];
        $result = "{$result}{$currentChar}";
        $i = $i + 1;
    }
    return $result;
}?>

64
<?php

namespace HexletBasics\Loops\EdgeCases;

function isArgumentsForSubstrCorrect($str, $index, $lenght)
{
    $strLenght = strlen($str);

    if ($index < 0){
        return false;
    }elseif ($lenght < 0){
        return false;
    }elseif ($index >= $strLenght){
        return false;
    }elseif ($lenght + $index > $strLenght){
        return false;
    }

    return true;
}?>

65
<?php

namespace HexletBasics\Loops\SyntaxSugar;

function filterString($str, $symbol)
{
    $i = 0;
    $result = '';

    while ($i < strlen($str)) {
        $currentChar = $str[$i];

        if ($currentChar !== $symbol){
            $result = "{$result}{$currentChar}";
        }

        $i +=  1;
    }

    return $result;
}?>

66
<?php

namespace HexletBasics\Loops\Mutators;

function makeItFunny($str, $n)
{
    $i = 0;
    $result = '';

    while ($i < strlen($str)) {
        $currentChar = $str[$i];
        if (($i + 1) % $n === 0){
            $upperChar = strtoupper($currentChar);
            $result = "{$result}{$upperChar}";
        } else {
            $result = "{$result}{$currentChar}";
        }
        $i++;
    }

    return $result;
}?>

67
<?php

namespace HexletBasics\Loops\ReturnFromLoop;

function hasChar($str, $char)
{
    $i = 0;
    $result = '';

    while ($i < strlen($str)){
        $currentChar = $str[$i];
        if ($currentChar === $char){
            return true;
        }

        $i++;
    }
    return false;
}?>

68
<?php

namespace HexletBasics\Loops\ForLoop;

function sumOfSeries($first, $end)
{
    $summ = 0;

    for ($i = $first; $i <= $end; $i++) {
        $summ += $i;
    }
    return $summ;
}?>

69
<?php

namespace HexletBasics\DeepIntoStrings\Unicode;

function invertCase($text)
{
    $len = mb_strlen($text);
    $result = '';
    for ($i = 0; $i < $len; $i++) {
        $symbol = mb_substr($text, $i, 1);
        $lowerSymbol = mb_strtolower($symbol);
        if ($symbol === $lowerSymbol) {
            $result .= mb_strtoupper($symbol);
        } else {
            $result .= $lowerSymbol;
        }
    }

    return $result;
}?>

70
<?php

print_r(setlocale(LC_CTYPE, 0));?>

71
<?php

namespace HexletBasics\DeepIntoStrings\StartWith;

function startsWith($text, $substr)
{
    return mb_strpos($text, $substr) === 0;
}?>

72
<?php

namespace HexletBasics\Dates\Timestamp;

const SECONDS_IN_YEAR = 60 * 60 * 24 * 365;

function getYear($timestamp)
{
    return 1970 + (int) floor($timestamp / SECONDS_IN_YEAR);
}?>

73
<?php

namespace HexletBasics\Dates\DateFunction;

function getCustomDate($timestamp)
{
    return date('d/m/Y', $timestamp);
}?>

74
<?php

namespace HexletBasics\Dates\Mkdtime;

function getHexletBirthday()
{
    return mktime(0, 0, 0, 1, 1, 2012);
}?>

75
<?php

print_r(date_default_timezone_get());?>