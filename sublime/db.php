<?php
session_start();
$connect = new PDO('mysql:host=localhost; dbname=diplom; charset=utf8', 'root', '');
$data = $connect->query("SELECT * FROM good");
$data = $data->fetchAll(PDO::FETCH_ASSOC);
$data_num = array_slice($data, -8);
$category = $connect->query("SELECT * FROM category");
$category = $category->fetchAll(PDO::FETCH_ASSOC);