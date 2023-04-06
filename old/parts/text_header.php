<?php
$blogTitle = 'Блог о поисковых системах';
$blogDescription = 'Все, что нужно для продвижения в интернет';
?>
<header class="w-full container mx-auto">
    <div class="flex flex-col items-center py-12">
        <a class="font-bold text-gray-800 uppercase hover:text-gray-700 text-5xl" href="#">
            <?php echo $blogTitle ?>
        </a>
        <p class="text-lg text-gray-600">
            <?= $blogDescription ?>
        </p>
    </div>
</header>
