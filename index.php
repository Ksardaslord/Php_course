<?php

$file = 'data.txt';
/*
$f = fopen($file, 'a+');
fwrite($f,"\n".rand(0,15));
fseek($f,0);//Указатель в начало
echo fread($f,filesize($file));
fclose($f);
*/

/*
r - Чтение, указатель в начале
r+ -Запись и чтение, указатель в начале
a - Запись, указатель в конец
a+ - Запись и чтение, указатель в конец
*/

/*
$tmp = tmpfile();  //Временный файл
fwrite($tmp,'lol');
fseek($tmp,0);
echo fread($tmp,3);
fclose($tmp);
*/


/* ========================АЛЬТЕРНАТИВА
$str = file_get_contents($file); // Читает содержимое файла в строку
file_put_contents($file, "Ведьмак"); // Перезапись
//file_put_contents($file, $str . "Ведьмак"); 
//file_put_contents($file, 'Герврант', FILE_APPEND); // Запись в конец вариант 2
echo $str, "<br>";
*/

/*
$arr = file('numbers.txt'); //Читает содержимое файла и помещает его в массив построчно  Если дописать флаг FILE_IGNORE_NEW_LINES то пустая строка не запишется
print_r($arr);

$arr = [1,2,3,4,5];
file_put_contents('arr.txt',implode(PHP_EOL,$arr)); // Массив построчно в файл PHP_EOL-корректный символ конца строки тк у разных операционок разный символ
*/

//copy('data.txt','data2.txt');    //Копирование файла
//rename('data2.txt','noob.txt');  // переименование файла/папку или перемещение если укзаать другую папку
//unlink('noob.txt');              // удаление файла
//echo file_exists('data.txt');         //проверка на существование папки и файла
//echo filesize('data.txt');            //размер файла в байтах
//$size = filesize('img.png')/1024/1024;
//echo round($size,2)," МБ";


//================================ДИРЕКТОРИИ

//mkdir('lol', 0777); // создание папки с правами доступа (7-полный доступ на чтение,запись и выполнение 4 - только владелец 6 - владелец и группы польз 7 все)
//Чтение, запись, выполнения Владелец,группы польз (привязанная к файлу),все остальные
//mkdir('lol/lol2', 0777, true); // создаст также и путь к директории
// rmdir('lol'); // - удаление папки
//$file = scandir("C:\OpenServer2\domains\DarkProgers\lessons\lesson_12_Файлы"); // массив файлов и папок
//$file = array_diff($file,['..','.']);  // убрать  .. и .
//print_r($file);

/*
$php = glob("*.txt"); // Находит файловые пути, совпадающие с шаблоном
foreach ($php as $v){
    echo "$v- размер ".filesize($v)." байт<br>";
}
*/


// Ищет файлы в директории и записывает путь в массив

function getFile($dir){
    $files = array_diff(scandir($dir),['..','.']);
    $result = [];
    foreach ($files as $file){
      $path = $dir.'/'.$file;
      if(is_dir($path)){
       $result = array_merge($result, getFile($path));
      }else{
        $result[]=$path;
      }
    }
    return $result;
  }
 print_r(getFile('dir'));








// //Парсинг ini файла =============
// $arr = parse_ini_file('config.ini', true);
// print_r($arr);
// echo '<br />';
// echo $arr['main']['site'];
?>
