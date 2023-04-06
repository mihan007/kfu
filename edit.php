<?php require_once 'edit_internal.php' ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> <?php if ($id): ?>
            Редактировать контакт
        <?php else: ?>
            Добавить контакт
        <?php endif ?>
    </title>
    <meta name="robots" content="noindex, nofollow">
    <script src="https://cdn.tailwindcss.com/3.1.4"></script>
</head>

<body class="flex items-center justify-center h-screen">

<form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="post" action="add.php<?php if ($id): ?>?id=<?= $id ?><?php endif; ?>" enctype="multipart/form-data">
    <div class="mb-4">
        <label class="block text-gray-700 font-bold mb-2" for="name">
            Имя
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
               id="name" type="text" placeholder="Имя" name="name" required value="<?= $name ?>">
    </div>
    <div class="mb-4">
        <label class="block text-gray-700 font-bold mb-2" for="description">
            Описание
        </label>
        <textarea
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="description" placeholder="Описание" name="description"><?= $description ?></textarea>
    </div>
    <div class="mb-4">
        <label class="block text-gray-700 font-bold mb-2" for="avatar">
            Аватарка
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
               id="avatar" type="file" name="avatar">
    </div>
    <div class="flex items-center justify-between">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                type="submit">
            Сохранить
        </button>
    </div>
</form>


</body>

</html>
