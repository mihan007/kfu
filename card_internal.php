<?php
$id = '';
$name = '';
$description = '';
$avatar = '';

if (isset($_GET['id'])) {
    require_once 'config.php';
    $connection = mysqli_connect($host, $username, $password, $db);
    // Выбере из БД все контакты
    $result = mysqli_query($connection, "SELECT * FROM contacts WHERE id=" . intval($_GET['id']) );
    [$id, $name, $description, $avatar] = mysqli_fetch_row($result);
}
