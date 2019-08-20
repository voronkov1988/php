<?php
session_start();
if (!$_SESSION['login'] || !$_SESSION['password']) {
    header('Location: login.php');
    die();
}
if (isset($_POST['unlogin'])) {
    session_destroy();
    header('Location: login.php');
    die();
}

?>

<body style="font-size: 40px;">
<p> Сайт только для зарегистрированных пользователей</p>
<?php
echo " привет, " . $_SESSION['login'] . "<br>";
?>
<form action="" method="post" style="margin: 40px; font-size: 40px;">
    <input style="font-size: 30px" type="submit" name="unlogin" value="Выйти на страницу авторизации">
</form>
</body>
<style>
    body {
        background-color: <?php echo $_COOKIE['color']; ?>;
    }
</style>

