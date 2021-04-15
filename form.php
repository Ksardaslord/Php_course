<form action="#" method ="POST">
<input type="text" name="name" id="" placeholder="Введи имя"><br>
<label for="check">Мне уже есть 18 лет</label>
<input type="checkbox" name="age" id="check"><br><br>
<input type="submit" value="вход" name = "submit">
</form>

<?php

if(isset ($_POST['submit'])){

    $name = trim($_POST['name']);
    if(!preg_match('&^[a-zA-ZА-Яа-яёЁ]+$&u',$name)){
        exit ("Некорректное имя");
    }
    $age_check = $_POST['age']?? '0';
    if($age_check == 'on'){
        echo "$name: доступ разрешен";
    }
    else echo "$name: доступ запрещен - вам нет 18 лет !";
}
