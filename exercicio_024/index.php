<?php 

$names = require_once "nomes.php";

//files
$f_a_m = fopen("nomes_a_m.txt", "w");
$f_n_z = fopen("nomes_n_z.txt", "w");

foreach($names as $name){

    //get limit letters
    $lastL = ord('A');
    $l = ord($name[0]);
    $nextL = ord('M');

    if ($l >= $lastL && $l <= $nextL){
        fputs($f_a_m, $name . PHP_EOL);
    } else {
        fputs($f_n_z, $name . PHP_EOL);
    }
}