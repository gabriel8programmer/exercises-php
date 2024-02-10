<?php 

$randValues = [];

for ($i = 0; $i < 20; $i++){
    $r = rand(1, 100);

    //test if the $r value exists in randValues
    while (!empty(array_keys($randValues, $r))){
        $r = rand(1, 100);
    }

    array_push($randValues, $r);
}

//sort array
sort($randValues);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 10</title>
</head>
<body>

    <?php foreach($randValues as $item): ?>
        <p><?= $item ?></p>
    <?php endforeach; ?>
    
</body>
</html>