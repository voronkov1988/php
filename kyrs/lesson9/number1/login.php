<?php
//session
session_start();
ini_set('session,gc.maxlifetime', '3600');
$connection = new PDO ('mysql:host=localhost; dbname=lesson9; charset=utf8', 'root', '' );
$login = $connection->query('SELECT * FROM lesson9_bd');

if (isset($_POST['login'])){
    foreach ($login as $log) {
        if ($_POST['login'] == $log['login'] && $_POST['password'] == $log['password']) {
            $_SESSION['login'] = $_POST['login'];
            $_SESSION['password'] = $_POST['password'];
            if (isset($_POST['color'])) {
                setcookie('color', $_POST['color']);
                header("Location: content.php");
                die();
            }
        }
    }
    echo "Неверный логин или пароль";
}
if (isset($_SESSION['login'] ) == true) {
    header('Location: content.php');
    exit;
}
?>

<style>
    body {
        margin: 200px 300px;
    }
    input, p{
        font-size: 30px;
        margin: 10px;
    }
</style>

<form action="" method="post">
    <input type="text" name="login" required placeholder="логин"> <br>
    <input type="password" name="password" required placeholder="Пароль"><br>
    <select name="color">
        <option> Выберите цвет фона</option>
        <option style="background-color: red;" name="red" value="red">Красный</option>
        <option style="background-color: green;" name="green" value="green">Зеленый</option>
        <option style="background-color: yellow;" name="yellow" value="yellow">Желтый</option>
    </select>
    <input type="submit">

</form>
