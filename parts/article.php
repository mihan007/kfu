<?php
    $image = 'https://source.unsplash.com/collection/1346951/1000x500?sig=1';
    $tag = 'Technology';
    $postHeader = 'Lorem Ipsum Dolor Sit Amet Dolor Sit Amet';
    date_default_timezone_set('Europe/Moscow');
    $date = time(); //кол-во секунд с 1 января 1970
    echo strtotime('2023-06-01 00:00:00'); die;
?>
<article class="flex flex-col shadow my-4">
    <!-- Article Image -->
    <a href="#" class="hover:opacity-75">
        <img src="<?= $image ?>">
    </a>
    <div class="bg-white flex flex-col justify-start p-6">
        <a href="#" class="text-blue-700 text-sm font-bold uppercase pb-4"><?= $tag ?></a>
        <a href="post.php" class="text-3xl font-bold hover:text-gray-700 pb-4"><?= $postHeader ?></a>
        <p href="#" class="text-sm pb-3">
            By <a href="#" class="font-semibold hover:text-gray-800">David Grzyb</a>, Published on <?= $date ?>
        </p>
        <a href="#" class="pb-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis porta dui. Ut eu iaculis massa. Sed ornare ligula lacus, quis iaculis dui porta volutpat. In sit amet posuere magna..</a>
        <a href="#" class="uppercase text-gray-800 hover:text-black">Continue Reading <i class="fas fa-arrow-right"></i></a>
    </div>
</article>
