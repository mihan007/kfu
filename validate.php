<?php
$errorCounter = 0;
if (count($_POST)>0) {
    if (strlen($_POST['fullname'])===0) {
        echo "Имя не может быть пустым<br>";
        $errorCounter++;
    }
    if (strlen($_POST['email'])===0) {
        echo "email не может быть пустым<br>";
        $errorCounter++;
    } elseif (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
        echo "Вы ввели неправильный email<br>";
        $errorCounter++;
    }

    if (strlen($_POST['password'])===0) {
        echo "Пароль не может быть пустым<br>";
        $errorCounter++;
    }

    if (strlen($_POST['confirm_password'])===0) {
        echo "Подтверждение пароля не может быть пустым<br>";
        $errorCounter++;
    }
    if ($_POST['password'] !== $_POST['confirm_password']) {
        echo "Пароль и подтверждение пароля не совпадают<br>";
        $errorCounter++;
    }

    if ($errorCounter === 0) {
        echo "Форма в порядке. Регистрируем пользователя.";
        require 'register.php';
    }
}
