<?php

session_start();

if(empty($_COOKIE['id_user'])) {
    $_SESSION['errLogin'] = "Авторизуйтесь!";
    header("Location: ./login.php");
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
    <?php if($_COOKIE['role'] == 1) { ?>
        <br><br>
        <a href="./requests.php">Записи</a>
        <h2>Добавить Визажиста</h2>
        <form action="./vendor/create-makeup_artist.php" method="post" class="create-makeup_artist">
            <div class="create_request_item">
                <div class="text-field text-field_floating">
                    <input class="text-field__input" type="text" name="fullname" id="fullname" placeholder="aaa" required>
                    <label class="text-field__label" for="fullname">ФИО</label>
                </div>
            </div>
            <input type="hidden" name="role" value="1">
            <input type="submit" value="Добавить" class="button">
        </form>
        <br>
        <h2>Добавить Тамаду</h2>
        <form action="./vendor/create-tamada.php" method="post" class="create-tamada">
            <div class="create_request_item">
                <div class="text-field text-field_floating">
                    <input class="text-field__input" type="text" name="fullname" id="fullname" placeholder="aaa" required>
                    <label class="text-field__label" for="fullname">ФИО</label>
                </div>
            </div>
            <input type="hidden" name="role" value="2">
            <input type="submit" value="Добавить" class="button">
        </form>
    <?php } elseif($_COOKIE['role'] == 2) { ?>
        <h2>Заполните форму, <br> и наш менеджер свяжется с Вами <br> для консультации.</h2>
        <form action="./vendor/create-request.php" class="create_request" method="post">
            <div class="create_request_item">
                <div class="text-field text-field_floating">
                    <input class="text-field__input" type="text" name="phone" id="phone" placeholder="aaa" required>
                    <label class="text-field__label" for="phone">Телефон</label>
                </div>
            </div>
            <div class="create_request_item">
                <p>Внешний вид</p>
                <div class="open-close"></div>
                <div class="create_request_item-wrap">
                    <p>Выбор Визажиста</p>
                    <div class="dropdown">
                    
                        <select class="old-select" name="makeup_artist" required>
                            <?php foreach ($select_staff as $item) { 
                                if($item[1] == 1) { ?>
                                    <option value="<?= $item[0] ?>"><?= $item[2] ?></option>
                                <?php }
                            } ?>
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
                        <select class="old-select" name="types_makeup" required>
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
                        <select class="old-select" name="types_hairstyle" required>
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
            </div>

            <div class="create_request_item">
                <p>Одежда</p>
                <div class="open-close"></div>
                <div class="create_request_item-wrap">
                    <p>Выбор размера платья</p>
                    <div class="dropdown">
                        <select class="old-select" name="female_clothes" required>
                            <option value="Размер 0">Размер 0</option>
                            <option value="Размер 2">Размер 2</option>
                            <option value="Размер 4">Размер 4</option>
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

                    <p>Выбор размера костюма</p>
                    <div class="dropdown">
                        <select class="old-select" name="male_clothes" required>
                            <option value="Размер 44">Размер 44</option>
                            <option value="Размер 46">Размер 46</option>
                            <option value="Размер 48">Размер 48</option>
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
            </div>

            <div class="create_request_item">
                <p>Выбор тамады</p>
                <div class="dropdown">
                    <select class="old-select" name="tamada" required>
                        <?php foreach ($select_staff as $item) { 
                            if($item[1] == 2) { ?>
                                <option value="<?= $item[0] ?>"><?= $item[2] ?></option>
                            <?php }
                        } ?>
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
                <p>Выбор места</p>
                <div class="dropdown">
                    <select class="old-select" name="place" required>
                        <option value="Место 1">Место 1</option>
                        <option value="Место 2">Место 2</option>
                        <option value="Место 3">Место 3</option>
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
                <p>Выбор даты и времени</p>
                <div class="text-field text-field_floating">
                    <input class="text-field__input" type="datetime-local" name="date" id="date" placeholder="aaa" required>
                </div>
            </div>

            <div class="create_request_item">
                <p>Количество гостей</p>
                <div class="text-field text-field_floating">
                    <input class="text-field__input" type="text" name="guests" id="guests" placeholder="aaa" required>
                    <label class="text-field__label" for="guests">Количество гостей</label>
                </div>
            </div>

            <input type="submit" class="button" value="Отправить">
        </form>
    <?php } ?>
    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./assets/script/main.js"></script>
</body>
</html>