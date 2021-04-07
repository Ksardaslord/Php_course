<?php

//функция суммы, заранее заданный параметр,Установка возвр значения int, установка типа данных
function foo_summ(int $a=22,int $b=33):int{
    return $a+$b;
}


function foo_change($x){
    //global $x;
    $x.= " рублей";
    return $x;
}

//Используем жесткую ссылку на переменную
function foo_change2(&$y){
    $y.= " рублей";
    return $y;
}


function showLogin()
{
    return LOGIN;
}


function foo_comparing($a,$b){
    switch($a<=>$b){
        case 0:
            return "$a = $b";
            break;
        case 1:
            return "$a";
            break;
        case -1:
            return "$b";
            break;
    }
}


function count_up(){
    static $count = 1;  // Статическая переменная сохраняется между вызовами функции!   
    $count++;
    echo "счет: ",$count,'<br>';

  }


?>