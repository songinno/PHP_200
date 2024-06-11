<?php

$num = 12;
echo gettype($num) . "\n"; // integer

$float = 12.123;
echo gettype($float) . "\n"; // double

$str = "안녕하세요";
echo gettype($str) . "\n"; // string

$numStr = "1212123";
echo gettype($numStr) . "\n"; // string

$fruit = array();
$fruit[] = "포도";
$fruit[] = "사과";
$fruit[] = "딸기";
echo gettype($fruit) . "\n"; // array

$nai = null;
echo gettype($nai) . "\n"; // NULL

$bool = true;
echo gettype($bool) . "\n"; // boolean


