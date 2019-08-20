<?php
$connection = new PDO('mysql:host=localhost; dbname=lesson8; charset=utf8','root', '');
if ($_POST['comment'])
    if($_POST['name']){
        $newComment = $_POST['comment'];
        $newName = $_POST['name'];
        $connection ->query("INSERT INTO lesson8.comments (name, comment) VALUES ('$newName','$newComment')");
    }else {
        echo 'тут нет комментариев';
    }

$allComment = $connection ->query("SELECT * FROM lesson8.comments");
foreach ($allComment as $input){
    echo $input['comment'] . '-' . $input['name'] . "<br>";
}

