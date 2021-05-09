<?php


    $arr [] = '4';
    $arr [] = '12';
    $arr [] = '44';
    $arr [] = '55';
    $arr [] = '33';
    $arr [] = '66';
    $arr [] = '22';
    $arr [] = '33';
    $arr [] = '1111';
    $arr [] = '2154';
    $arr [] = '2';
    $arr [] = '3';
    $arr [] = '4';
    $arr [] = '5';

    $i=0;
    $a = $arr[$i];
    $b = $arr[$i+1];


    for ($i = 0; $i<count($arr); $i++) {

        if($a < $b) {
            $a = $b;
            echo 'max = ' .  $a . '<br>';
        }

        $a = $a;
        $b = $arr[$i+1];
    }