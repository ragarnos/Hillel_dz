<?php
require './vendor/autoload.php';
require_once __DIR__ . './config/dbConnect.php';
$db = new \config\dbConnect();

if($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['submit'] == 1){
    $name = trim($_POST['name']);
    $surname = trim($_POST['surname']);
    $age = (int)trim($_POST['age']);
    $email = trim($_POST['email']);

    $db->createUser($name, $surname, $age, $email);
    header('Location:users.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Добавить нового пользователя</title>
</head>
<body>
<table style="border: 1px solid #333">
    <div>
        <th style="border: 1px solid yellowgreen"><a href="index.php">Главная</a></th>
        <th style="border: 1px solid yellowgreen"><a href="create.php">Добавить нового пользователя</a></th>
        <th style="border: 1px solid yellowgreen"><a href="users.php">Показать всех пользователей</a></th>
        <th style="border: 1px solid yellowgreen"><a href="delete.php">Удалить пользователя</a></th>
    </div>
</table>
<form method="POST">
    <label>
        <input type="text" name="name" placeholder="Name">
    </label><br>
    <label>
        <input type="text" name="surname" placeholder="Surname">
    </label><br>
    <label>
        <input type="text" name="age" placeholder="Age">
    </label><br>
    <label>
        <input type="text" name="email" placeholder="Email">
    </label><br>
    <button type="submit" name="submit" value="1">Создать пользователя</button>
</form>
</body>
</html>
