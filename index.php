<?php
require_once 'config.php';
$connection = mysqli_connect($host, $username, $password, $db);
// Выбере из БД все контакты
$result = mysqli_query($connection, "SELECT * FROM contacts" );
$contacts = mysqli_fetch_all($result, MYSQLI_ASSOC);
