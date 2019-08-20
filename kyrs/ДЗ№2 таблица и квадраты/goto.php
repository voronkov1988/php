<?php

$num = 1;
while (true){
    echo $result = $num * $num . "<br>";
    if ($result>=100){
        goto konec;
    }
    $num++;
}
konec:
echo 'цикл завершен';