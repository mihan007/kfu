<?php
require_once 'config.php';

$connection = mysqli_connect($host, $username, $password, $db);
// Выбере из БД все фразы, которые знает попугай
$result = mysqli_query($connection, "SELECT * FROM phrases" );
$phrases = mysqli_fetch_all($result, MYSQLI_ASSOC);

//Найти случайну фразу из словаря попугая
$randomIndex = random_int(1, count($phrases)) - 1;
echo "Попугай: " . $phrases[$randomIndex]['text'];
?>

