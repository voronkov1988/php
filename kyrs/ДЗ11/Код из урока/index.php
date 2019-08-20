<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="POST" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="file" name="file2">
    <input type="file" name="file3">
    <button name="submit">Загрузить</button>
</form>
</body>
</html>
<?php
//echo "<pre>";
//var_dump($_FILES);
//echo "</pre>";
$connection = new PDO('mysql:host=localhost; dbname=lesson11; charset=utf8', 'root', '');
if (isset($_POST['submit'])){
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileType = $_FILES['file']['type'];
    $fileError = $_FILES['file']['error'];
    $fileSize = $_FILES['file']['size'];

    $fileExtension = strtolower(end(explode('.', $fileName)));
    $fileName = explode('.', $fileName)[0];
    $fileName = preg_replace('/[0-9]/', '', $fileName);
    $allowedExtensions = ['jpg', 'jpeg', 'png'];

    if (in_array($fileExtension, $allowedExtensions)){
        if ($fileSize < 5000000){
            if ($fileError === 0){
                $connection->query("INSERT INTO images (imagename, extension) 
                VALUES ('$fileName', '$fileExtension');");
                $lastID = $connection->query("SELECT MAX(id) FROM images");
                $lastID = $lastID->fetchAll();
                $lastID = $lastID[0][0];
                $fileNameNew = $lastID . $fileName . '.' . $fileExtension;
                $fileDestination = 'uploads/' . $fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                echo ' успех ';
            }else
                echo ' чтото пошло не так';
        }
    }else{
        echo ' слишком большой размер файла';
    }
} else{
    echo 'Неверный тип файла';
}

// Удаление изобр
$data = $connection->query('SELECT * FROM images');
echo "<div style='display: flex; align-items: flex-end; flex-wrap: wrap'>";
foreach ($data as $img) {

    $delete = "delete".$img['id'];
    $image = "uploads/".$img['id'].$img['imagename'].'.'.$img['extension'];
    if (isset($_POST[$delete])){
        $imageID = $img['id'];
        $connection->query("DELETE FROM lesson11.images WHERE id = '$imageID'");
        if (file_exists($image)){
            unlink($image);
        }
    }


    if (file_exists($image)){
        echo "<div>";
        echo "<img width='150' height='150' src=$image>";
        echo "<form method='POST'><button name='delete".$img['id']."' style='display:block; margin: auto'>
                    Удалить</button></form></div>";
    }
}
echo "</div>";

?>