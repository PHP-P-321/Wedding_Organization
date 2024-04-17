<?php
session_start(); // Начинаем сессию для работы с сессионными переменными

if(empty($_COOKIE['id_user'])) {
    $_SESSION['errLogin'] = "Авторизуйтесь!";
    header("Location: ./login.php");
}

require_once("../db/db.php"); // Подключаем файл с настройками базы данных

$fullname = $_POST['fullname'];
$role = $_POST['role'];

$select_staff = mysqli_query($connect, "SELECT * FROM `staff` WHERE `fullname` = '$fullname'");
$select_staff = mysqli_fetch_assoc($select_staff);

if(!empty($select_staff)) {
    header("Location: ../index.php");
} else {
    mysqli_query($connect, "INSERT INTO `staff` 
                            (`role`, `fullname`)
                            VALUES
                            ('$role', '$fullname')
    ");
    header("Location: ../index.php");
}
