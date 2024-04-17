<?php
session_start(); // Начинаем сессию для работы с сессионными переменными

if(empty($_COOKIE['id_user'])) {
    $_SESSION['errLogin'] = "Авторизуйтесь!";
    header("Location: ./login.php");
}

require_once("../db/db.php"); // Подключаем файл с настройками базы данных

$id_client = $_COOKIE['id_user'];
$phone = $_POST['phone'];
$makeup_artist = $_POST['makeup_artist'];
$types_makeup = $_POST['types_makeup'];
$types_hairstyle = $_POST['types_hairstyle'];
$female_clothes = $_POST['female_clothes'];
$male_clothes = $_POST['male_clothes'];
$tamada = $_POST['tamada'];
$place = $_POST['place'];
$date = $_POST['date'];
$guests = $_POST['guests'];

mysqli_query($connect, "INSERT INTO `requests`
                        (`id_client`, `phone`, `makeup_artist`, `type_makeup`, `type_hairstyle` , `female_clothe`, `male_clothe`, `tamada`, `place`, `date`, `guests`)
                        VALUES
                        ('$id_client', '$phone', '$makeup_artist', '$types_makeup', '$types_hairstyle', '$female_clothes', '$male_clothes', '$tamada', '$place', '$date', '$guests')
");

header("Location: ../index.php");
