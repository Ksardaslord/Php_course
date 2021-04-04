<?php
 //Массив - это упорядоченное отображение, которое устанавливает соответствие между значением и ключом
 $month = [1=>"январь","февраль","март","апрель"];
 echo $month['1'], "<br>";
 $month ['5'] = "май";
 $month [] = "Html";                 // Добавление элемента массива в конец
 //unset($month[6]);                 // Удаление элемента массива
 echo "<pre>";
 print_r($month);
 echo "</pre>";
 
 
 $num = [12,4,3,5,12,1,3,16];
 sort($num);                          //сортировка 
 
 array_unique($num);                  //удаляет повторы (не меняет исходный массив)
 foreach ($num as $value){
    echo "$value ";
 }
 echo"<br>";
 echo "Сумма элементов массива = ", array_sum($num),"<br>";
 echo "Произведение элементов массива = ", array_product($num),"<br>";
 echo "Количество элементов массива = ", count($num),"<br>";
 echo in_array('12',$num),"<br>";  // ищет элемент в массиве, вернет true/false
       
        
 echo"<pre>";
 //print_r(array_chunk($num,2));   //Разбивает массив на подмассивы (не меняет исходный массив)
 //print_r(array_slice($num,0,3)); //Вырезать из массива элементы  (не меняет исходный массив)
 //array_splice($num,0,3,['a','b','c']);//меняет элементы внутри массива
 //print_r($num);
 echo "</pre>";
 
 
 
 //АССОЦИАТИВНЫЙ МАССИВ ========================
 
 $fruit = ['яблоко'=>10,'банан'=>5,'киви'=>15,'манго'=>55];
 //asort($fruit);
  
 foreach ($fruit as $key=>$value){
     //if($value>10)                                            // условия внутри цыкла
     echo "$key количество: $value шт. <br>";
  }
 
 
 
  // МНОГОМЕРНЫЙ МАССИВАМИ 
 
  $food = [
     'fruits'=>['kiwi', 'banana', 'apple'],
     'veggie'=>['tomato', 'potato', 'pea'],
  ];
 echo $food['fruits'][1],"<br>";  //банан
 echo count($food, 1),"<br>";  //для рекурсии
 
 foreach ($food as $key=>$value){
    echo $key, ": <br>";
    foreach ($value as $k=>$v){
    echo "$k - ",$v,"<br>";
    }
 }
 
 echo "<br>";
 
 //СЛИЯНИЕ МАССИВОВ  ==========================
 
 $arr1 = range(1,5); 
 $arr2 = range(1,10,2);
 
 foreach ($arr1 as $value){
     echo $value," ";
 }
 echo "<br>";
 foreach ($arr2 as $value){
     echo $value," ";
 }
 echo "<br>";
 $sum_arr = array_merge($arr1,$arr2); // только для нумерованных ключей.
 
 
 foreach ($sum_arr as $value){
     echo $value," ";
 }
 echo "<br>";
 
 print_r(array_intersect($arr1,$arr2)); // вычисляет пересечения массивов (возвращает массив)
 echo"<br>";
 print_r(array_diff($arr1,$arr2));    // сравнивает массив 1 со вторым (возвращает массив)
 
 
 
 //ПРЕОБРАЗОВАНИЕ МАССИВА в строку и обратно  ====================
 
 $str = 'пн вт ср чт пт сб вс';
 $arr = explode(' ', $str);
 echo "<pre>";
 print_r($arr);
 echo "</pre>";
 
 $color = ['красный', 'зеленый', 'синий'];
 list($red,$green,$blue)=$color; //Присваиваем переменным значения массива
 echo $red,$green,$blue;
 $string = implode('|', $color);
 var_dump($string);
 echo "<br>";
 
 
 /*
 sort
 asort
 array_merge - слияние массива без сохр ключ-значение
 array_sum   - сумма эл массива
 array_unique- удаляет повторы
 count       - количество элементов массива
 range       - создание массива по параметрам
 explode     - преобразует строку в массив
 implode     - преобразует массив в строку
 
 
 //PHP.net Расширения, относящиеся к переменным и типам -> функции для работы с массивом
 
1.
$arr = [
    ['name'=>'iphon','price'=>30000],
    ['name'=>'macbook','price'=>130000],
    ['name'=>'macpro','price'=>430000]
];
-Увеличить стоимость товара на 30%
-Вывести весь товар: цена iphone = 39000р.; (с помощью цикла foreach)
 
 2.Создать массив со значениями от 1 до 100 (используя функцию), найти сумму чисел
 3.Создать массив со значениями от (a-z) и соединить их в строку)
 */
 
  
  ?>