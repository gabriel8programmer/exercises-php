<?php 

$names = require_once "nomes.php";

foreach($names as $name){
    $lastL = ord('A');
    $l = ord($name[0]);
    $nextL = ord('M');
    
    if ($l >= $lastL && $l <= $nextL){
        echo $name . PHP_EOL;
    }
}