<?php

$names = [
    "João",
    "Maria",
    "José"
];

$lastNames = [
    "Silva",
    "Teixeira",
    "Oliveira"
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 6</title>
</head>
<body>

    <h1>Nomes:</h1>
    <ul>
        <?php foreach($names as $index => $item): ?>
            <li><?= $item . " " . $lastNames[$index] ?></li>
        <?php endforeach; ?>
    </ul>
    
</body>
</html>