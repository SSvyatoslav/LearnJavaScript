<?php

 # Количество профессий : массив в ключ имена в значен профессии


 $b = 0;
 $c = 0;

 $arr = array(
     "dasd" => "manager",
     'das' => 'developer',
     "mike" => "manager",
     "aaaa" => "manager",
     "vvvv" => "manager",
     'ddas' => 'developer',
     "dddd" => "manager",
     "sasda" => "manager",
     'edqw' => 'developer',
     "qqqq" => "manager",
     'eq' => 'developer',
     'das3' => 'developer',
     'zzzz' => 'developer'
 );

 foreach ($arr as $key => $value) {

     //echo $key . ' - ' .$value . '<br>';

     if($value == 'manager') {
         $b++;
     }elseif ($value == 'developer') {
         $c++;
     }
 }

 echo 'manager = ' . $b . '<br>';
 echo 'developer = ' . $c . '<br>';