<?php
// IF ELSEIF

$rain = 3;   // 0, false, "0", "", NULL

// КОНСТРУКЦИЯ УСЛОВИЯ

if ($rain){
    echo "Идет дождь <br>";
    if ($rain>2)echo "Ливень<br>";
}
else{
    echo "Ясная погода <br>";
}
echo $rain ? "Идет дождь<br>":"Ясная погода<br>"; //Сокращеная запись исп тернарный оператор

//Elseif ==========
    
$price = 100;
if($price >= 100){
   echo "Скидка 30 %<br>";
}
elseif ($price >= 50){
    echo "Скидка 15 %<br>";
}
else{
    echo "Скидка 10 %<br>";
}

$discount = $price >= 100 ? 30 : ($stock >= 50 ? 15 : 10);
echo "Скидка $discount %<br>";

//Несколько условий подряд

$x = 10;
$y = 15;
if ($x > 5 || $y > 20){
    echo $x+$y,"<br>";
}


// ISSET - определяет была ли установлена переменная значением отличным от NULL (существует ли она)
$user = "Dark";
if (isset($user)):        
    echo "Привет $user <br>";
    unset ($user);  // удаление переменной
endif;

// EMPTY - "",false, 0, null
$user = "Wilson";
if (empty($user)){
    echo "Гость <br>";
}
else echo "$user <br>";




// SWITCH применяется если нам нужно сравнивать переменную или выражение с множеством различных значений и выполнять код в зависимости от значения этой переменной

$lang = $_GET['lang']??"ru";
switch ($lang) {
    case 'en': 
        echo 'Hello World';
    break;
    case 'de': 
        echo 'Hallo Welt';
    break;
    case 'ru':
    case 'русский':
        echo 'Привет Мир';
    break;
    default:
        echo 'Данный язык не поддерживается'; 
    break;
}

?>
<div>
<a href="?lang=ru">Русский</a>
<a href="?lang=en">Английский</a>
<a href="?lang=de">Немецкий</a>
</div>