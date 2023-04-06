<?php
$errorCounter = 0;
if (count($_POST)>0) {
    if (strlen($_POST['email'])===0) {
        echo "email не может быть пустым<br>";
        $errorCounter++;
    } elseif (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
        echo "Вы ввели неправильный email<br>";
        $errorCounter++;
    } elseif ($_POST['email'] !== $_SESSION['email']) {
        echo "Пользователя с этим email нет на сайте<br>";
        $errorCounter++;
    }

    if (strlen($_POST['password'])===0) {
        echo "Пароль не может быть пустым<br>";
        $errorCounter++;
    } elseif (!password_verify($_POST['password'], $_SESSION['password'])) {
        echo "Пароль неверный<br>";
        $errorCounter++;
    }

    if ($errorCounter === 0) {
        echo "Форма в порядке. Пользователь может войти.";
    }
}
