

<?php

function myage($day, $mes, $god)
{
    if ($day > date('d') || $mes == date('m') && $god > date('Y')) {
        return (date('Y') - $god - 1);
    } else {
        return (date('Y') - $god);
    }
}

if (isset( $_GET['god']) && isset($_GET['mes'])  && isset($_GET['day'])  ){
    echo myage( $_GET['day'], $_GET['mes'], $_GET['god']);
}

?>
    <form action="" method="get">
        <input type="text" name="day">
        <input type="text" name="mes">
        <input type="text" name="god">
        <input type="submit">
    </form>


<?php
$metod = [
      'get'=>'GET - запрашивает данные из указанного ресурса',
      'post'=>'POST - отправляет данных, подлежащие обработке, на указанный ресурс'
];
foreach ($metod as $item) {
    echo $item . "<br>";
}
?>

    <form action="contacts2.php" method="post">
        <input type="text" name="name2">
        <input type="text" name="familia2">
        <input type="text" name="age2"></br>
        <hr>
        <input type="submit">
    </form>

    <form action="contacts.php" method="get">
        <input type="text" name="name">
        <input type="text" name="familia">
        <input type="text" name="age"></br>
        <hr>
        <input type="submit">
    </form>