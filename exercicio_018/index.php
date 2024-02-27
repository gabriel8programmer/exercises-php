<?php 

$file = fopen("dados.txt", "w");

for ($c = 0; $c < 1000; $c++){
    fputs($file, uniqid() . PHP_EOL);
}