<?php

session_start();

if(empty($_COOKIE['id_user'])) {
    $_SESSION['errLogin'] = "Авторизуйтесь!";
    header("Location: ./login.php");
} elseif($_COOKIE['role'] != 1) {
    header("Locarion: ./index.php");
}

require_once("./db/db.php"); // Подключаем файл с настройками базы данных

$select_requests = mysqli_query($connect, "SELECT * FROM `requests` ORDER BY `id` DESC");
$select_requests = mysqli_fetch_all($select_requests);

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
    <br><br>

    <div class="requests">
        <?php foreach($select_requests as $request) { ?>
            <div class="request">
                <p>
                    <strong>ID заявки:</strong>
                    <?= $request[0] ?>
                </p>
                <p>
                    <?php 
                        $id_client = $request[1];
                        $select_client = mysqli_query($connect, "SELECT `fullname` FROM `users` WHERE `id`='$id_client'");
                        $select_client = mysqli_fetch_assoc($select_client);
                    ?>
                    <strong>ФИО Клиента:</strong> 
                    <?= $select_client['fullname']; ?>
                </p>
                <p>
                    <strong>Номер телефона Клиента:</strong> 
                    <?= $request[2] ?>
                </p>
                <p>
                    <?php 
                        $id_makeup_artist = $request[3];
                        $select_makeup_artist = mysqli_query($connect, "SELECT `fullname` FROM `staff` WHERE `id`='$id_makeup_artist'");
                        $select_makeup_artist = mysqli_fetch_assoc($select_makeup_artist);
                    ?>
                    <strong>ФИО Визажиста:</strong> 
                    <?= $select_makeup_artist['fullname']; ?>
                </p>
                <p>
                    <strong>Тип макияжа:</strong> 
                    <?= $request[4] ?>
                </p>
                <p>
                    <strong>Тип прически:</strong> 
                    <?= $request[5] ?>
                </p>
                <p>
                    <strong>Размер одежды девушки:</strong> 
                    <?= $request[6] ?>
                </p>
                <p>
                    <strong>Размер одежды мужчины:</strong> 
                    <?= $request[7] ?>
                </p>
                <p>
                    <?php 
                        $id_makeup_artist = $request[8];
                        $select_makeup_artist = mysqli_query($connect, "SELECT `fullname` FROM `staff` WHERE `id`='$id_makeup_artist'");
                        $select_makeup_artist = mysqli_fetch_assoc($select_makeup_artist);
                    ?>
                    <strong>ФИО Тамады:</strong> 
                    <?= $select_makeup_artist['fullname']; ?>
                </p>
                <p>
                    <strong>Место проведения мероприятия:</strong> 
                    <?= $request[9] ?>
                </p>
                <p>
                    <strong>Дата и время проведения:</strong> 
                    <?= $request[10] ?>
                </p>
                <p>
                    <strong>Количество гостей:</strong> 
                    <?= $request[11] ?>
                </p>
            </div>
        <?php } ?>
    </div>
    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./assets/script/main.js"></script>
</body>
</html>