
<?php

define("SERVERNAME","localhost");
define("DB_LOGIN","root");
define("DB_PASSWORD","root");
define("DB_NAME","new_db");
/*
$connect = new mysqli(SERVERNAME, DB_LOGIN, DB_PASSWORD, DB_NAME);

$sql = "UPDATE `heroes` SET `age`= 55 WHERE `name`='дункан'";
if ($connect->query($sql) === TRUE) {
    echo "record update successfully";
}else echo "Eror record";
$connect->close();
*/
//РЕАЛИЗАЦИЯ ДОБАВЛЕНИЯ В БД через форму=======================================




$name=$age=$rank='';

$connects = new mysqli(SERVERNAME,DB_LOGIN,DB_PASSWORD,DB_NAME);
$sql = "SELECT * FROM `heroes`";
$result = $connects->query($sql);
for ($user=array();$row=$result->fetch_assoc();$user[]=$row);
$last = count($user)-1;
$last_id = $user[$last]['id']+1; // реализация правильный id новых
$connects->close();


if(isset($_POST['add_heroes'])){
    $name = $_POST['name']??'';
    $age = $_POST['age']??'';
    $rank = $_POST['rank']??'';
    $connect = new mysqli(SERVERNAME,DB_LOGIN,DB_PASSWORD,DB_NAME);
    $sql = "INSERT INTO `heroes`(`id`,`name`,`age`,`rank`) VALUES ('$last_id','$name','$age','$rank')";
    $connect->query($sql);
    $connect->close();
    header('Location: /');
}

if(isset($_GET['select'])):
    $id = $_GET['select']??'';
    $name = $user[$id]['name']??'';
    $age = $user[$id]['age']??'';
    $rank = $user[$id]['rank']??'';
    $id_heroes = $user[$id]['id']??'';
    
endif;

if (isset($_POST['delete_heroes'])){
    $connect = new mysqli(SERVERNAME,DB_LOGIN,DB_PASSWORD,DB_NAME);
    $sql = "DELETE FROM `heroes` WHERE `id`='$id_heroes'";
    $connect->query($sql);
    $connect->close();
    $name=$age=$rank=$id_heroes='';
    header('Location: /');
}

if (isset($_POST['edit_heroes'])){
    $name = $_POST['name']??'';
    $age = $_POST['age']??'';
    $rank = $_POST['rank']??'';
    $connect = new mysqli(SERVERNAME,DB_LOGIN,DB_PASSWORD,DB_NAME);
    $sql = "UPDATE `heroes` SET `name`='$name',`age`='$age',`rank`='$rank' WHERE `id`='$id_heroes'";
    $connect->query($sql);
    $connect->close();
    $name=$age=$rank=$id_heroes='';
    header('Location: /');

}
?>
<form action="#" method='Post'>
<input type="text" name="name" value='<?=$name?>' placeholder="name" id="">
<input type="number" name="age" value='<?=$age?>' id="" placeholder="age">
<input type="number" name="rank" value='<?=$rank?>' id="" placeholder="rank">
<input type="submit" name="add_heroes" value="add_heroes">
<?php if(isset($_GET['select'])):?>
    <input type="submit" name="edit_heroes" value="Edit">
    <input type="submit" name="delete_heroes" value="Detete">
<?php endif;?>
</form>

<?php
foreach ($user as $k=>$v){
    echo "<p>$v[id] | $v[name] | age: $v[age] | rank: $v[rank] <a href='?select=$k'>select</a></p>";
}
?>