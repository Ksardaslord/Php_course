<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<ul class="menu">
        <li><a href="?name=form">Form</a></li>
        <li><a href="?name=blog">Blog</a></li>
        <li><a href="?name=shop">Shop</a></li>
        <li><a href="?name=about">About</a></li>
    </ul>

<div class="content">

<?

$site_name = $_GET['name']??'0';
switch ($site_name){
    case 'form':
        require_once "form.php";
        break;
    case 'blog':
        require_once "blog.php";
        break;
    case 'shop':
        require_once "shop.php";
        break;
    case 'about':
        require_once "about.php";
        break;
    default:
    echo "<br>А это дефолтная страница";
}
?>
</body>
</html>




