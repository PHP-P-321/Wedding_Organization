<?php

session_start();

if(empty($_COOKIE['id_user'])) {
    $_SESSION['errLogin'] = "Авторизуйтесь!";
    header("Location: ./login.php");
}

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
    <h2>Заполните форму, <br> и наш менеджер свяжется с Вами <br> для консультации.</h2>
    <form action="./vendor/create-request.php" class="create_request" method="post">
        <div class="create_request_item">
            <div class="text-field text-field_floating">
                <input class="text-field__input" type="text" name="phone" id="phone" placeholder="aaa">
                <label class="text-field__label" for="phone">Телефон</label>
            </div>
        </div>
        <div class="create_request_item">
            <p>Выбор Визажиста</p>
            <div class="dropdown">
                <select class="old-select" name="makeup_artist">
                    <option value="id_1">Визажист 1</option>
                    <option value="id_1">Визажист 2</option>
                    <option value="id_1">Визажист 3</option>
                </select>
                <div class="new-select">
                    <div class="selection">
                        <p>
                            <span></span>
                            <i></i>
                        </p>
                        <span></span>
                    </div>
                </div>
            </div>

            <p>Выбор макияжа</p>
            <div class="dropdown">
                <select class="old-select" name="types_makeup">
                    <option value="дневной">дневной</option>
                    <option value="вечерний">вечерний</option>
                    <option value="свадебный">свадебный</option>
                    <option value="водостойкий">водостойкий</option>
                </select>
                <div class="new-select">
                    <div class="selection">
                        <p>
                            <span></span>
                            <i></i>
                        </p>
                        <span></span>
                    </div>
                </div>
            </div>

            <p>Выбор прически</p>
            <div class="dropdown">
                <select class="old-select" name="types_hairstyle">
                    <option value="боб">Стрижка Боб</option>
                    <option value="начес">Начес</option>
                    <option value="без_волос">без волос</option>
                </select>
                <div class="new-select">
                    <div class="selection">
                        <p>
                            <span></span>
                            <i></i>
                        </p>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="create_request_item">
            <p>Подбор костюма и костюма</p>
            <select name="male_clothes">
                <option value="id_1">Визажист 1</option>
                <option value="id_1">Визажист 2</option>
                <option value="id_1">Визажист 3</option>
            </select>
            <select name="female_clothes">
                <option value="id_1">Визажист 1</option>
                <option value="id_1">Визажист 2</option>
                <option value="id_1">Визажист 3</option>
            </select>
        </div>
    </form>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./assets/script/main.js"></script>
</body>
</html>