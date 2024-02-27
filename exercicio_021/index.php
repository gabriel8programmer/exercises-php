<?php 

if ($argc < 2 || !is_numeric($argv[1])){
    echo "Erro! Forneça um número";
    die();
}

//get the number
$n = $argv[1];

for ($i = 1; $i <= 10; $i++){
    echo "$n x $i = " . ($n*$i) . PHP_EOL;
}