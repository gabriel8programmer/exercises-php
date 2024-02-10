<?php

$list = [
    'Programador',
    'Designer',
    'Engenheiro',
    'Médico',
    'Advogado',
    'Professor',
    'Bombeiro',
    'Policial',
    'Piloto',
    'Cientista'
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 13</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <div class="row justify-content-center">
        <div class="col-10">
            <table class="table table-bordered table-dark table-hover">
                <thead>
                    <tr class="align-middle">
                        <th>Profissão</th>
                        <th>Em maiúsculas</th>
                        <th>Em minúsculas</th>
                        <th>Primeiras 4 letras</th>
                        <th>Total caracteres</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($list as $item) : ?>
                        <tr>
                            <td><?= $item ?></td>
                            <td><?= strtoupper($item) ?></td>
                            <td><?= strtolower($item) ?></td>
                            <td><?= substr($item, 0, 4) ?></td>
                            <td><?= strlen($item) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>