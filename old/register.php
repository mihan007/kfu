<?php
$_SESSION['fullname'] = $_POST['fullname'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
header("Location: login.php");
