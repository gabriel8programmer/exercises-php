<?php 

$numbers = [];
$numbersNotAllowed = [10,20,30,40,50,60,70,80,90];

for ($i = 0; $i < 20; $i++){
    $r = rand(1, 100);

    while (!empty(array_keys($numbers, $r)) || !empty(array_keys($numbersNotAllowed, $r))){
        $r = rand(1, 100);
    }

    array_push($numbers, $r);
}

//sort array
sort($numbers);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 11</title>
</head>
<body>

    <h1>Resultado:</h1>

    <?php foreach($numbers as $n): ?>
        <p><?= $n ?></p>
    <?php endforeach; ?>
    
    
</body>
</html>