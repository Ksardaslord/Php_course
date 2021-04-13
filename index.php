<?php


echo abs(-20),"<br>";  // Модуль числа
echo sqrt(9),"<br>";   // Квадратный корень числа
echo pow(9,3),"<br>";  // Возводит число в заданную степень
echo pow(27,1/3),"<br>";// pow можно использовать и для корней кв, кубич итд

echo M_PI.' Число пи<br />';  //число пи
echo M_E.' Число Е<br><br>';   //число е

echo round(12.55, 1).'<br />'; // Округление числа до деясятых
echo round(113.2, -1).'<br /><br>';// Округление до десятков

echo floor(33.99).'<br>';  // округление в меньшую всегда
echo ceil(33.01).'<br><br>';   // округление в большую

echo "Рандомное число: ",mt_rand(1, 100).'<br />';  // Рандомное значение

echo min(5,-10,3,100).'<br />';
echo max(-3,23,3).'<br />';

$arr=[0,2,124,11,12];  // Работает с индексными числовыми масивами
echo max($arr),"<br><br>";

echo base_convert(1543,10,2),"<br>";  // пример перевода из десятичной в двоичную



//строки ===============================================

$str = "Hello";
$str2 = "Привет";
strlen($str2);    //длина строки
mb_strlen($str2);

echo ucfirst("london"),"<br>"; // преобразует первый символ в верхний регистр
echo lcfirst("London"),"<br>"; // преобразует первый символ в нижний регистр
echo ucwords("london is the capital of great britain"),"<br>";
echo strtoupper("witcher"),"<br>";
echo strtolower("HOME"),"<br>";

$date ="31.12.2013";
echo str_replace(".","-",$date),"<br>"; //  Ищет в строке заданный текст и меняет
echo substr_replace("31.12.2013", '2021', -4, 4),"<br>";// заменяет указанную часть строки на другую

echo trim(' Leoric    '), "<br>";
echo trim('@!Leo!ric!!','!@'), "<br>"; // Удаляет пробелы по краям, и указанные символы 
//ltrim и rtrim (только с одной стороны)

echo strrev('boon'),"<br>";  // чтение строки наоборот (не поддерживает ру)

echo strip_tags('<p>просто <b>текст</b></p>',['<p>']); // удаляет html теги, второй параметр оставит нужные теги
echo htmlspecialchars("</a href=''>какойто текст</a>",ENT_QUOTES),"<br>";// Преобразует специальные символы в HTML-сущности

echo md5("123456"),"<br>";
echo password_hash("123456", PASSWORD_DEFAULT),"<br>";


?>