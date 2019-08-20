<?php
session_start();
$connection = new PDO('mysql:host=localhost; dbname=test; charser=utf8', 'root', '');
$login = $connection->query('SELECT * FROM login_test');

if ($_POST['login'] == $login['login'] && $_POST['password'] == $login['password']){
    $_SESSION['login'] = $_POST['login'];
    $_SESSION['password'] == $_POST['password'];
    header('Location: admin.php');
}
?>
<h1>Перейти в админку</h1>
<form method="post">
    <input type="login" name="login" required placeholder="login">
    <input type="password" name="password" required placeholder="password">
    <input type="submit">
</form>

<style>
    body{
        background-color: gray;
        margin: 300px;
        font-size: 30px;
        font-family: sans-serif;
    }
    h1 {
        text-align: center;
        text-transform: uppercase;
        color: rebeccapurple;
    }
    input{
        width: 200px;
        height: 50px;
    }

    input login{
        font-size: 30px;
    }


</style>

