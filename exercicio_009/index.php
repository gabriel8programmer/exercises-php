<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 9</title>
</head>
<body>

    <h1>Resolução:</h1>

    <?php for($i = 0; $i < 20; $i++): ?>
        <?php $r = rand(1, 100); ?>
        <p><?= "$r x 3 = " . ($r * 3) ?></p>
    <?php endfor; ?>
    

    
</body>
</html>