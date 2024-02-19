<?php 

if ($argc == 3){
    $v1 = $argv[1];
    $v2 = $argv[2];
    echo "$v1 + $v2 = " . $v1+$v2 . PHP_EOL;
} else {
    echo "Erro!";
}

?>