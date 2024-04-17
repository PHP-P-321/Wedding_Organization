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
    <form action="./vendor/reg.php" method="post" class="reg_form">
        <div class="create_request_item">
            <div class="text-field text-field_floating">
                <input class="text-field__input" type="email" name="email" id="email" placeholder="aaa" required>
                <label class="text-field__label" for="email">Email</label>
            </div>
        </div>
        <div class="create_request_item">
            <div class="text-field text-field_floating">
                <input class="text-field__input" type="text" name="fullname" id="fullname" placeholder="aaa" required>
                <label class="text-field__label" for="fullname">ФИО</label>
            </div>
        </div>
        <div class="create_request_item">
            <div class="text-field text-field_floating">
                <input class="text-field__input" type="text" name="login" id="login" placeholder="aaa" required>
                <label class="text-field__label" for="login">Логин</label>
            </div>
        </div>
        <div class="create_request_item">
            <div class="text-field text-field_floating">
                <input class="text-field__input" type="password" name="password" id="password" placeholder="aaa" required>
                <label class="text-field__label" for="password">Пароль</label>
            </div>
        </div>
        <div class="create_request_item">
            <div class="text-field text-field_floating">
                <input class="text-field__input" type="password" name="access_password" id="access_password" placeholder="aaa" required>
                <label class="text-field__label" for="access_password">Подтверждение Пароля</label>
            </div>
        </div>
        <div class="reg_form_button">
            <input type="submit" value="Зарегистрироваться" class="button">
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