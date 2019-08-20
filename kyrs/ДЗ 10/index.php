<?php
//данные из бд
$connection = new PDO('mysql:host=localhost; dbname=lesson10; charset=utf8', 'root', '');
$data = $connection
    ->query('SELECT * FROM comment WHERE moderation= "ok" ORDER BY id DESC ')
    ->fetchAll(PDO::FETCH_ASSOC);

//есть ли данные
if ($data != false) {  // если есть
    foreach ($data as $com) {
        echo $com['name'] . " " . $com['comment'] . "<br>";
    }
} else {
    echo 'тут нет комментариев';
}
// если были новые комменты добавляешь в бд
if (isset($_POST['comment'])) {
    $username = htmlspecialchars($_POST['name']);
    $text = htmlspecialchars($_POST['comment']);
    $safe = $connection->prepare("INSERT INTO lesson10.comment (name, comment) VALUES (:username, :text)");
    $arr = ['username' => $username, 'text' => $text];
    $safe->execute($arr);
}
