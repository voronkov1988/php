
<?php
$god = $_GET['god'];
$mes = $_GET['mes'];
$day = $_GET['day'];
echo "<pre>";
var_dump($god, $mes, $day);
echo "</pre>";
function myage($day, $mes, $god)
{
    if ($day > date('d') || $mes == date('m') && $god > date('Y'))
        return (date('Y') - $god - 1);
    else
        return (date('Y') - $god);
}

?>
    <form action="" method="get">
        <input type="text" name="day">
        <input type="text" name="mes">
        <input type="text" name="god">
        <input type="submit">
    </form>
<?php

echo myage($day, $mes, $god);