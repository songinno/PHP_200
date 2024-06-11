<?php

// ! 문자열 - 숫자

$str = (string)123;

echo gettype($str) . "\n"; // string

$int1 = (int)$str;
echo gettype($int1) . "\n"; // integer
$int1 = (integer)$str;
echo gettype($int1) . "\n"; // integer

// # 숫자로 변경할 수 없는 문자열 값인 경우 : 0으로 변환
$str2 = "안녕하세요";

$int2 = (int)$str2;

echo $int2 . "\n"; // 0

// # 문자열 일부에 숫자가 포함된 경우
// @ 문자열 앞쪽은 숫자로 변경 O
// @ 뒷쪽은 변경 X
$str3 = "123안녕456";

$int3 = (int)$str3;

echo $int3 . "\n"; // 123

// ! 실수 - 정수
$double = 3.141592;

$int4 = (int)$double;

echo $int4 . "\n"; // 3
echo gettype($int4) . "\n"; // integer