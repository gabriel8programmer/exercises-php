<?php 

if ($argc < 2 || !is_numeric($argv[1])){
    die("Erro!");
}

//get the param numeric
$n = $argv[1];
$separator = "--------------------------------";

$f = fopen("tabuada.txt", "w");
for ($i = 1; $i <= 1000; $i++){
    fputs($f, "$n x $i = " . ($n*$i) . PHP_EOL);
    if ($i%100 === 0){
        fputs($f, $separator . PHP_EOL);
    }
}


