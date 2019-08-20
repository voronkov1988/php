<?php
session_start();
require_once('../db.php');


if (isset($_POST['id'])){
    $id = $_POST['id'];
    $product = $connect->query("SELECT * FROM diplom.good WHERE id='$id'");
    $product = $product->fetch(PDO::FETCH_ASSOC);

    if (isset($_SESSION['cart'][$id])){
        $_SESSION['cart'][$id]['quantity'] += 1;
    } else{
        $_SESSION['cart'][$id] = [
            'title' => $product['name'],
            'price' => $product['price'],
            'category' => $product['rus_cat'],
            'img' => $product['img'],
            'link' => $product['link_name'],
            'quantity' => 1,

        ];
    }

    $_SESSION['totalGood'] = $_SESSION['totalGood'] ? $_SESSION['totalGood'] += 1 : 1;
    $_SESSION['totalPrice'] = $_SESSION['totalPrice'] ? $_SESSION['totalPrice'] += $product['price'] : $product['price'];
};
echo $_SESSION['totalGood'];
//header("Location: {$_SERVER['HTTP_REFERER']}");

