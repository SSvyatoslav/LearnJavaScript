<?php

 # Найти в массиве совпадения логина и пароля

 $login = "max";
 $pass = 1111;

 $arr = array(
     "swat" => 2222,
     "swatdff" => "pddd",
     "dsadas" => '344444',
     "max" => 1111,
     'zzz' => 2313
 );

 foreach ($arr as $key => $value) {
     if($key == $login) {

         if($value == $pass) {
             echo "логин - " . $key . ' / пароль - ' . $value . "<br>";
             echo 'Совпадение' . '<br>';
         }
     }
 }