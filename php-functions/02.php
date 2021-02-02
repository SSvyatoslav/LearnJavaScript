<?php
/**
 * Created by PhpStorm.
 * User: svyat
 * Date: 01.02.21
 * Time: 21:56
 */



/*$var = '';

unset($var);

if(isset($var)) {
    echo 'var true';
}*/
/*
$a = 'test';
$b = 'test2';

var_dump(isset($a));
var_dump(isset($a, $b));

unset($a);


var_dump(isset($a));
var_dump(isset($a, $b));*/


/*$z = 0;

var_dump(isset($a));*/


$a = array( 'test' => 1, 'hello' => null, 'pie' => 1);


var_dump(isset($a['test']));
var_dump(isset($a['hello']));