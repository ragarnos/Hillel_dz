<?php
require_once __DIR__ . './config/dbConnect.php';
$db = new \config\dbConnect();
$isTable = $db->tableExists('test');

if($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['createTable'] == 1){
    $db->createTable('users');
    header('Location:index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Главная</title>
</head>
<body>
<table border = 1>
    <tr>
        <th style="border: 1px solid yellowgreen"><a href="index.php">Главная</a></th>
        <th style="border: 1px solid yellowgreen"><a href="create.php">Добавить нового пользователя</a></th>
        <th style="border: 1px solid yellowgreen"><a href="users.php">Показать всех пользователей</a></th>
        <th style="border: 1px solid yellowgreen"><a href="delete.php">Удалить пользователя</a></th>
    </tr>
</table>
<form method="post">
    <?php if($isTable === false):?>
    <button type="submit" value="1" name="createTable">Создать таблицу «Users»</button>
    <?php else:?>
    <p>Таблица «Users» создана</p>
    <?php endif?>
</form>
</body>
</html>
