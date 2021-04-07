<?php
//В конце вывести функции в отдельный файл
// require - fatal include - warning

require_once('func.php');  // подключает файл. Пример с 2мя подкл


echo foo_summ(33.9,3), "<br>";


$x = 500;

echo foo_change($x), "<br>";
echo $x, "<br>";  // глобальная переменная x - не поменялась

$y = 333;
echo foo_change2($y), "<br>";
echo $y,"<br>";  // глобальная переменная x - не поменялась


// ===================== Часть 2 
define('LOGIN', 'admin');  // константы видны в любой области видимости
echo showLogin(), "<br>";

echo foo_comparing(50,30),"<br>";

count_Up();
count_Up();
count_Up();
count_Up();



//АНОНИМНЫЕ ФУНКЦИИ ===================

$arr = [1,2,3,4,5,6,7];
$average = function(array $arr){
  return array_sum($arr)/count($arr);
};
//var_dump($average);
echo "Среднее значение массива = " . $average($arr), "<br>";


// РЕКУРСИЯ 
function factorial($x) {
  if ($x === 0) return 1;
  else return $x*factorial($x-1); // 3*2*1*1
  }
echo factorial(3);

?>