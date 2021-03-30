<?php

$name = "William"; // string
echo gettype($name) . "<br>";
echo var_dump($name) . "<br>";
if (is_string($name))echo "$name - это строка<br>";

$num = 33;   //integer целое число в 10 системе  +- 9 квинтилионов
$num1 = 0b1010; // запись числа в двоичной системе (число 10)
$num2 = 012; // запись числа в восьмиричной системе (число 10)
$num3 = 0xA; // запись числа в шестнадцатиричной системе (число 10)
is_int($num); //проверяет является ли число целым (возвращает 1 или )

$b = 3.5;  //float
$c = 5E2;  //float равное 5 * 10^2   от 1.7E-308 до 1.7E+308
$d = 5E-2;  //float равное 5 / 10^2 = 0.05
if (is_float($c))echo "3.5 - число с плавающей точкой<br>";

// Булев тип два значения ложь или истина
$rain = true;  
$snow = false;

if (is_bool($rain))echo "Булев тип <br>";

$var = null;  



//СОСТАВНЫЕ ТИПЫ ДАННЫХ
//Массив — это поименованная совокупность однотипных элементов, упорядоченных по индексам, определяющим положение элемента в массиве.
$arr_number = [1,3,54,55]; // Ключ 0 знчение - 1 итд
$arr_user = ['name' => 'William','age'=>33];  // Ассоциативный массив
echo $arr_number[1],"<br>";   //Вывод элемента с ключом 1
echo $arr_user['name'],"<br>";

is_array($arr_user);
print_r($arr_user);



//Resource - это переменная содержащая ссылку на какой-либо внешний ресурс
$resource = fopen('C:\OpenServer2\domains\home.home\123.txt', 'r');
is_resource($resource);
//Object
$mysql = new Mysqli('localhost','root','root','darkproger');
echo gettype($mysql);
//print_r($mysql);



//Неявное приведение типа
$a = 5;
echo gettype($a). "<br>";
$a = $a*1.5;  // приведение типа к float
echo gettype($a). "<br>";
$a = 5;
$b=2.24;
echo "строка ",$a.$b;  // приводит к строке
echo "3.14fas"*2 . "<br>";  // строку превратит в число с плав точкой (слева направо)


//Принудитель
$b = 3;
$b = (string) $b;
echo gettype($b). "<br>";
$b = (float) $b;
echo gettype($b). "<br>";
$b = (bool) $b;  // 0, пустая строка,пустой массив вернут false(0)
echo gettype($b). "<br>";
echo $b . "<br>";

$c = "33";
$c = (int)$c;
echo gettype($c). "<br>";
$c = (array)$c;
echo gettype($c). "<br>";
?>
