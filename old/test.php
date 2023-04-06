<form action="test.php" method="post">
    <input type="text" name="name" placeholder="Введите ответ" autofocus>
    <input type="submit" value="Ответить попугаю">
</form>
----------------
<?php
var_dump(print $_POST['name'])
?>
