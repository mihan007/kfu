<?php

require_once 'config.php';
$connection = mysqli_connect($host, $username, $password, $db);

$name = $_POST['name'];
$description = trim($_POST['description']);

$filename = date('Y-m-h-i-s') . '.jpg';
move_uploaded_file($_FILES['avatar']['tmp_name'], __DIR__ . '/avatars/' . $filename);

$avatar = '/avatars/' . $filename;

if (isset($_GET['id'])) {
    $stmt = mysqli_prepare($connection, "UPDATE contacts SET `name`=?,`description`=?,`avatar`=? WHERE id=" . intval($_GET['id']));
} else {
    $stmt = mysqli_prepare($connection, "INSERT INTO contacts SET `name`=?,`description`=?,`avatar`=?;");
}

mysqli_stmt_bind_param($stmt, 'sss', $name, $description, $avatar);
mysqli_stmt_execute($stmt);

header('Location: list.php');
