<?php 

$names = [
    "João Oliveira",
    "Maria Teixeira",
    "José Silva",
    "Ana Santos",
    "Pedro Rodrigues",
    "Paulo Castro",
    "Lucas Dinis",
    "Luiz Matias",
    "Luiza Oliveira",
    "Paula Cardoso",
    "Paulina Fernandes"
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 7</title>
</head>
<body>
    
    <h1>Nomes:</h1>
    <ul>
        <?php foreach($names as $name): ?>
            <?php if(strlen($name) <= 12): ?>
                <li><?= $name ?></li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>

</body>
</html>