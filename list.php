<?php

require_once 'index.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://unpkg.com/tailwindcss@0.3.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="h-screen overflow-hidden flex items-center justify-center" style="background: #edf2f7;">
<div class="w-full max-w-screen-xl mx-auto p-6">
    <div class="relative rounded overflow-hidden border border-grey-light mb-8 bg-white">
        <div class="border-b border-grey-light p-4 bg-grey-lighter py-8">
            <div class="bg-white mx-auto max-w-sm shadow-lg rounded-lg overflow-hidden">
                <div class="sm:flex sm:items-center px-2 py-4">
                    <div class="flex-grow">
                        <h3 class="font-normal px-2 py-3 leading-tight">Адресная книга</h3>
                        <input type="text" placeholder="Поиск..."
                               class="my-2 w-full text-sm bg-grey-light text-grey-darkest rounded h-10 p-3 focus:outline-none"/>
                        <div class="w-full">
                            <?php foreach ($contacts as $contact): ?>
                                <div class="flex cursor-pointer my-1 hover:bg-blue-lightest rounded">
                                    <div class="w-8 h-10 text-center py-1">
                                        <p class="text-3xl p-0 text-green-dark">&bull;</p>
                                    </div>
                                    <div class="w-3/5 h-10 py-3 px-1">
                                        <a class="hover:text-blue-dark">
                                            <a href="card.php?id=<?= $contact['id'] ?>"><?= $contact['name'] ?></a>
                                        </p>
                                    </div>
                                    <div class="w-2/5 h-10 text-right p-3">
                                        <a class="text-sm text-grey-dark"><a href="edit.php?id=<?= $contact['id'] ?>">Редактировать</a></p>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <div class="sm:flex bg-grey-light sm:items-center px-2 py-4">
                    <div class="flex-grow text-right">
                        <a href="edit.php" class="bg-blue hover:bg-blue-dark text-white py-2 px-4 rounded">
                            Добавить
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
