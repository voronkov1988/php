<?php
session_start();
require_once '../db.php';

if  (isset($_POST['order'])) {
    $name = $_POST['username'];
    $lastName = $_POST['lastName'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    $connect->query("INSERT INTO `order` (name, lastName, email, phone) VALUES ('$name', '$lastName', '$email', '$phone')");

    $lastID = $connect->query("SELECT MAX(id) FROM `order` WHERE email='$email'");
    $lastID = $lastID->fetch(PDO::FETCH_ASSOC);
    $lastID = $lastID['MAX(id)'];


    $message = "<h2>Ваш заказ принят! Номер заказа $lastID принят</h2>";
    $message .= "<h3>Вы заказали:</h3>";

    foreach ($_SESSION['cart'] as $product) {
        $message .= "<div>{$product['title']} в количестве {$product['quantity']}</div>";
    }

    $message .= "<p> Всего товаров :  {$_SESSION['totalGood']}</p>";
    $message .= "<p> Общая сумма : $ {$_SESSION['totalPrice']}</p>";

    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

    $subject = "Ваш заказ под номером $lastID принят";
    $headers = 'From: admin@example.com' . "\r\n" .
        'Reply-To: z.voronkov@mail.ru' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    unset($_SESSION['totalGood']);
    unset($_SESSION['cart']);
    unset($_SESSION['totalPrice']);
    header("Location: success.php");
    die();
}

