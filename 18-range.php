<?php

// ! 순차적인 숫자
$num = range(1, 10);

// ! 순차적인 영문자
$str = range("A", "F");

var_dump($num);
/*
 array(10) {
  [0]=>
  int(1)
  [1]=>
  int(2)
  [2]=>
  int(3)
  [3]=>
  int(4)
  [4]=>
  int(5)
  [5]=>
  int(6)
  [6]=>
  int(7)
  [7]=>
  int(8)
  [8]=>
  int(9)
  [9]=>
  int(10)
}
*/
var_dump($str);
/*
array(6) {
  [0]=>
  string(1) "A"
  [1]=>
  string(1) "B"
  [2]=>
  string(1) "C"
  [3]=>
  string(1) "D"
  [4]=>
  string(1) "E"
  [5]=>
  string(1) "F"
}
*/

// ! 1 ~ 10까지 간격을 사용해 배열 생성
$num2 = range(1, 10, 3);

var_dump($num2);

/*
array(4) {
  [0]=>
  int(1)
  [1]=>
  int(4)
  [2]=>
  int(7)
  [3]=>
  int(10)
}
*/