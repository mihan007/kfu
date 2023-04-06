<?php require_once 'card_internal.php' ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile card</title>
    <meta name="robots" content="noindex, nofollow">
    <script src="https://cdn.tailwindcss.com/3.1.4"></script>
</head>

<body class="flex items-center justify-center h-screen">

<div class="p-5 border rounded text-center text-gray-500 max-w-sm">
    <img class="w-32 h-32 rounded-full mx-auto" src="<?= $avatar ?>" alt="">
    <div class="text-sm mt-5">
        <a href="javascript:void(0)"
            class="font-medium leading-none text-gray-900 hover:text-indigo-600 transition duration-500 ease-in-out">
            <?= $name ?>
        </a>
        <p><?= $description ?></p>
    </div>
</div>

</body>

</html>
