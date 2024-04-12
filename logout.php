<?php
setcookie("id_user", null, -1, "/");
setcookie("role", null, -1, "/");

// перенаправляем на страницу авторизации 
header("Location: ./index.php");
