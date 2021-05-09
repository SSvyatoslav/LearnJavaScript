<?php


$mass = array(13);

if($_GET["a"] > $mass[0]){ echo 'Ваше число больше';}
if($_GET["a"] < $mass[0]){ echo 'Ваше число меньше';}
if($_GET["a"] == $mass[0]){ echo 'Поздравляю вы угадали :)';}

echo "<br><a href='/php/06.php'>Вернутся</a>";