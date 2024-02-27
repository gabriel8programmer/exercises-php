<?php 

$file = fopen("dados.txt", "w");

for ($c = 0; $c < 1000; $c++){
    $uniq_hash = hash('sha256', $c);
    fputs($file, $uniq_hash . PHP_EOL);
}