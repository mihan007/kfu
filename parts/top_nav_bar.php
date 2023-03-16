<?php

$externalSites = [
    [
        'link' => 'https://ya.ru',
        'text' => 'Yandex'
    ],
    [
        'link' => 'https://google.com',
        'text' => 'Google'
    ],
    [
        'link' => 'https://yahooo.com',
        'text' => 'Yahoo'
    ],
    [
        'link' => 'https://duckduckgo.com',
        'text' => 'DUckDUckGo'
    ],
    [
        'link' => 'https://vk.com',
        'text' => 'VK'
    ]
];

$socialNetworks = [
    'facebook' => 'https://fb.com/mihail.kuklin',
    'instagram' => 'https://instragram.com/mihan007',
    'twitter' => 'https://twitter.com',
    'linkedin' => 'https://linkedin.com'
];

?>
<nav class="w-full py-4 bg-blue-800 shadow">
    <div class="w-full container mx-auto flex flex-wrap items-center justify-between">

        <nav>
            <ul class="flex items-center justify-between font-bold text-sm text-white uppercase no-underline">
                <?php foreach ($externalSites as $site): ?>
                    <li><a class="hover:text-gray-200 hover:underline px-4"
                           href="<?= $site['link'] ?>"><?= $site['text'] ?></a></li>
                <?php endforeach; ?>
            </ul>
        </nav>

        <div class="flex items-center text-lg no-underline text-white pr-6">
            <a class="" href="<?= $socialNetworks['facebook'] ?>">
                <i class="fab fa-facebook"></i>
            </a>
            <a class="pl-6" href="<?php echo $socialNetworks['instagram'] ?>">
                <i class="fab fa-instagram"></i>
            </a>
            <a class="pl-6" href="<?= $socialNetworks['twitter'] ?>">
                <i class="fab fa-twitter"></i>
            </a>
            <a class="pl-6" href="<?= $socialNetworks['linkedin'] ?>">
                <i class="fab fa-linkedin"></i>
            </a>
        </div>
    </div>

</nav>
