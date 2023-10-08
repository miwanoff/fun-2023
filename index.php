<?php

// function sum(int $n, int $m=0, int $k=0): int
// {

//     return $n + $m;
// }
// $value = sum(4, 6);
// echo $value."\n"; // буде виведено 9
// echo sum(5)."\n"; // буде виведено 25

// function show($n): string
// {
//   return "The number {$n}";
// }

// echo show("aaa");

// function f() {
//     $x = 1;
//     $y = 2;
//     $z = 3;
//     return array($x, $y, $z) ;
//   }

// $arr = f();
// //   echo $arr[2];
// // $a = $arr[0];
// // $b = $arr[1];
// // $c = $arr[2];
// list ($a, $b, $c) = f();
// echo "$a $b $c";

// function funct (&$string )
//  {
//      $string .= 'цей всередені.' ;
//     echo $string."\n";
//  }

//  $str = 'Цей рядок за межами функції, ';
//  funct ($str);
//  echo $str; // Цей рядок за межами функції, а цей всередені.

// function makecup($type = "чаю") {
//     return "Зробіть чашку  $type.\n";
// }

// echo makecup();
// echo makecup("кави");

// function makecup($types = array("какао"), $maker = "з цукром")
// {
//     return "Зробіть чашку  " . implode(", ", $types) . " $maker.\n";
// }
// echo makecup();
// echo makecup(array("кави", "чаю"));
// echo makecup(array("кави", "чаю"), "з лимоном");

// function planets() {
//     for($i = 0; $i < func_num_args(); $i ++) {
//       echo func_get_arg($i) . "\n";
//     }
//   }
//   planets ("Меркурій", "Венера", "Земля", "Марс");

// $a = 3;
// $b = 10;
// function double(): int
// {
//     //global $a;
//     // print_r($GLOBALS);
//     static $n = 2;
//     $n++;
//     return $n;
// }

// echo double();
// echo double();
// echo double();
// // echo $n;

// $greet = function ($name) {
//     echo ("Привіт, $name");
// };
// $greet('PHP');

function cube($n)
{
    return $n * $n;
}

$a = [100, 25, 9, 16, 1];
$b = array_map(function ($n) {
    return $n * $n;
}, $a);
print_r($b);