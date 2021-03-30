<?php

//ОПЕРАТОРЫ В PHP 
/*
-Арифметические операторы +-*%/
-Приоритеты скобки,умножение и деление
-Операторы присваивания +=
-Инкремент и декремент
*/

// АРИФМЕТИЧЕСКИЕ ОПЕРАТОРЫ

$x = 5;
$y = 2;
echo $x + $y . "<br>";  //сложение
echo $x - $y . "<br>";  //вычитание
echo $x * $y . "<br>";  //умножение
echo $x / $y . "<br>";  //деление
echo 10 % 4 .  "<br>";  //остаток от деления
echo -(3-4) . "<br>";  //унарное отрицание
echo $x ** 3 .  "<br>"; //x в 3ей степени
echo $x ** (1/2) ."<br>"; //Квадратные корень из x

// Приоритеты
echo 3 + 3 * 2 . "<br>"; // Выведет 9
echo (3 + 3) * 2 . "<br>"; // Выведет 12
echo 2/2*2 . "<br>"; // деление и умножение одинаковый приоритет выполниться слева направо
echo 10>3+8 . "<br>"; // +- больший приоритет чем < >

//ОПЕРАТОР ПРИСВАИВАНИЯ
$z = 10;
$z = $z + 5;  

$z += 2;   // z = z +2
$z -= 2;  
$z *= 2;
$z /= 2; 
$z %= 2;   
echo "z = ",$z,"<br>";

$z.=' р.';
echo $z,"<br>";

// ИНКРИМЕНТ И ДЕКРЕМЕНТ ТОЛЬКО К ПЕРЕМЕННОЙ!

$x = 10;
$x++;   // приращение на 1 (х=х+1)
echo $x,"<br>";
$x--;   // уменьшение на 1 (х=х-1)
echo $x,"<br>";
//ПРИРАЩАЕМ ПРЯМ В КОМАНДЕ ЭХО
// Пре-инкремент
    $var = 5;
    echo ++$var, '<br>'; // 6

// Пост-инкремент
    $var2 = 5;
    echo $var2++, '<br>'; // 5


$str = "A";
echo ++$str,"<br>";


//ЛОГИЧЕСКИЕ ОПЕРАТОРЫ ============
//результат сравнения всегда или true или false
$x = 10;
$y = 5;
echo $x > $y,"<br>"; //true 1
echo $x < $y,"<br>"; //false ''
echo $x >= 10,"<br>";//true 1

$a = 33; // int
$b = '33'; // string
echo "<br>a == b: " . ($a == $b);  //true на разные типы не смотрит
echo "<br>a === b (строгое): " . ($a === $b); //false сверяет значения и типы данных
echo "<br>a != b: " . ($a != $b); // false
echo "<br>a !== b: " . ($a !== $b); // строгое неравно true

$c = true;
$d = false;

echo '<br>Отрицание c: '. !$c;    
echo '<br>c ИЛИ d: '.($c || $d); // логическое сложение true если один из них истина.
echo '<br>c И d: '.($c && $d);   // логическое умножение true если оба истинно
echo '<br>c ИСКЛЮЧАЮЩЕЕ ИЛИ d: '.($c xor $d); // дожен быть истиным только один оператор

   
echo (!$c || $d) && ($c xor $d);  //(false||false)&&(true xor false);


/*
$name = 'iphone';
$price = 31333;
Скидка на товар 20%
    Вывести текст: 
    Название товара:'iphone' 
    цена товара: 31333
    цена товара со скидкой:....

*/
?>
