<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://unpkg.com/tailwindcss@0.3.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="h-screen overflow-hidden flex items-center justify-center" style="background: #edf2f7;">
<div class="bg-grey-lighter min-h-screen flex flex-col">
    <div class="container max-w-sm mx-auto flex-1 flex flex-col items-center justify-center px-2">
        <div class="bg-white px-6 py-8 rounded shadow-md text-black w-full">

            <h1 class="mb-8 text-3xl text-center">Вход на сайт</h1>
            <?php require 'validate_login.php'; ?>
            <form method="post" action="login.php">

                <input value="<?= $_POST['email'] ?? '' ?>"
                       type="text"
                       class="block border border-grey-light w-full p-3 rounded mb-4"
                       name="email"
                       placeholder="Email"/>

                <input
                        type="password"
                        class="block border border-grey-light w-full p-3 rounded mb-4"
                        name="password"
                        placeholder="Пароль"/>

                <button
                        type="submit"
                        class="w-full text-center py-3 rounded bg-green text-white hover:bg-green-dark focus:outline-none my-1"
                >Войти
                </button>
            </form>
        </div>

        <div class="text-grey-dark mt-6">
            Нет аккаунта?
            <a class="no-underline border-b border-blue text-blue" href="signup.php">
                Зарегистрироваться
            </a>.
        </div>
    </div>
</div>
</body>
</html>
