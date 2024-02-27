<?php 

$hash_count = rand(2000, 3000);

$file = fopen("dados.txt", "w");
for ($i = 0; $i < $hash_count; $i++){
    fputs($file, uniqid() . (($i < $hash_count-1)? PHP_EOL: ""));
}