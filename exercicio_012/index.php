<?php

$person = [
    'nome' => 'João',
    'idade' => 20,
    'altura' => 1.80,
    'peso' => 80,
    'profissão' => 'Programador'
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 12</title>
</head>

<body>

    <h1>Dados:</h1>

    <?php foreach($person as $i => $p): ?>
        <div><?= ucfirst($i) . " = $p"?></div>
    <?php endforeach; ?>

</body>

</html>