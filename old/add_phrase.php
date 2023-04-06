<?php
require_once 'config.php';
$connection = mysqli_connect($host, $username, $password, $db);
$phrase = $_POST['phrase'];

$stmt = mysqli_prepare($connection, "INSERT INTO phrases SET text=?;");
mysqli_stmt_bind_param($stmt, 's', $phrase);
mysqli_stmt_execute($stmt);

header('Location: index.php');
