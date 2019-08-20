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
    <input type="file" name="file[]">
    <input type="file" name="file[]">
    <input type="file" name="file[]">
    <button name="submit">Загрузить</button>
</form>
</body>
</html>
<?php
$connection = new PDO('mysql:host=localhost; dbname=lesson11; charset=utf8', 'root', '');
function reArrayFiles(&$file_post) {
    $file_ary = array();
    $file_count = count($file_post['name']);
    $file_keys = array_keys($file_post);

    for ($i=0; $i<$file_count; $i++) {
        foreach ($file_keys as $key) {
            $file_ary[$i][$key] = $file_post[$key][$i];
        }
    }
    return $file_ary;
}
if (isset($_POST['submit'])){

    $files = reArrayFiles($_FILES['file']);

    foreach ($files as $file) {
        if (strlen($file['name']) != 0) {
//Если в имени файла несколько точек (например, abc.xyz.jpg), то имя файла нужно сохранить не до первой точки,
// а до последней (имя на выходе - abc.xyz)
            $explodeName = explode('.', $file['name']);
            $fileExtension = strtolower(end($explodeName));
            $fileName = explode('.', $file['name']);
            array_splice($fileName, -1);
            $fileName = implode('.',$fileName);

            $fileName = preg_replace('/[0-9]/', '', $fileName);
            $allowedExtensions = ['jpg', 'jpeg', 'png'];

            if (in_array($fileExtension, $allowedExtensions)) {
                if ($file['size'] < 5000000) {
                    if ($file['error'] === 0) {
                        $connection->query("INSERT INTO lesson11.images (imagename, extension) 
                        VALUES ('$fileName', '$fileExtension');");

                        $lastID = $connection
                            ->query("SELECT MAX(id) FROM lesson11.images")
                            ->fetchAll(PDO::FETCH_ASSOC);
                        $lastID = $lastID[0]['MAX(id)'];
                        $fileNameNew = $lastID . $fileName . '.' . $fileExtension;
                        $fileDestination = 'uploads/' . $fileNameNew;
                        move_uploaded_file($file['tmp_name'], $fileDestination);
                    } else {
                        echo 'Что то пошло не так';
                    }
                } else {
                    echo 'Слишком большой размер файла';
                }
            } else {
                echo 'Неверный тип файлов';
            }
        }
        else{
            continue;
        }
    }
}
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