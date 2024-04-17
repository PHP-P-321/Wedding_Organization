<?php

session_start();

if(empty($_COOKIE['id_user'])) {
    $_SESSION['errLogin'] = "Авторизуйтесь!";
    header("Location: ./login.php");
} elseif($_COOKIE['role'] != 1) {
    header("Locarion: ./index.php");
}

require_once("./db/db.php"); // Подключаем файл с настройками базы данных

$select_staff = mysqli_query($connect, "SELECT * FROM `staff` ORDER BY `id` DESC");
$select_staff = mysqli_fetch_all($select_staff);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <a href="./logout.php">Выйти</a>
    <br><br>
    <a href="./index.php">На Главную</a>
    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./assets/script/main.js"></script>
</body>
</html>