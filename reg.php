<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <h2>Регистрация</h2>
    <form action="./vendor/reg.php" method="post" class="auth_form">
        <div class="auth_form_item">
            <p>Email</p>
            <input type="text" name="login" placeholder="Логин" required>
        </div>
        <div class="auth_form_item">
            <p>ФИО</p>
            <input type="text" placeholder="ФИО" name="fullname" required>
        </div>
        <div class="auth_form_item">
            <p>Логин</p>
            <input type="text" placeholder="Логин" name="login" required>
        </div>
        <div class="auth_form_item">
            <p>Пароль</p>
            <input type="password" placeholder="Пароль" name="password" required>
        </div>
        <div class="auth_form_item">
            <p>Подтверждение Пароля</p>
            <input type="password" placeholder="Пароль" name="access_password" required>
        </div>
        <div class="auth_form_button">
            <input type="submit" value="Войти">
        </div>
    </form>
    <?php
    if(empty($_SESSION['errReg'])) {
        echo "";
    } else {
        echo "<br>";
        echo $_SESSION['errReg'];
        echo "<br>";
    }
    session_destroy();
    ?>
    <a href="./login.php">Авторизоваться</a>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./assets/js/main.js"></script>
</body>
</html>