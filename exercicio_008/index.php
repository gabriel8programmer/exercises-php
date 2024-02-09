<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 8</title>
</head>
<body>

    <h1>Tabuada:</h1>

    <?php for ($n = 2; $n <= 6; $n++): ?>
        <?php for ($i = 1; $i <= 10; $i++): ?>
            <p><?= "$n x $i = " . ($i * $n) ?></p>
        <?php endfor; ?>
        <?php if ($n < 6): ?>
            <hr>
        <?php endif; ?>
    <?php endfor; ?>

</body>
</html>