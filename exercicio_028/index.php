<?php 

$user = [];
$errorName = "";
$errorLastName = "";

function login(){
    global $user, $errorName, $errorLastName;
    $text_nome = $_POST["text_nome"];
    $text_apelido = $_POST["text_apelido"];

    //test name
    if (empty($text_nome)){
        $errorName = "Erro! Nome.";
    }

    if (empty($text_apelido)){
        $errorLastName = "Erro! Sobrenome.";
    }

    if (empty($text_nome) || empty($text_apelido)){
        return;
    }

    $user = [
        "name" => $text_nome,
        "lastName" => $text_apelido,
    ];
}

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    login();
}

?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 28</title>
    <link rel="stylesheet" href="../assets/bootstrap/bootstrap.min.css">
</head>

<body>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-sm-4">
                <form action="index.php" method="post">
                    <div class="mb-3">
                        <input type="text" name="text_nome" class="form-control" placeholder="Nome">
                        <small class="text-danger">
                            <?php if(!empty($errorName)): ?>
                                <?= $errorName ?>
                            <?php endif; ?>
                        </small>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="text_apelido" class="form-control" placeholder="Apelido">
                        <small class="text-danger">
                            <?php if(!empty($errorLastName)): ?>
                                <?= $errorLastName ?>
                            <?php endif; ?>
                        </small>
                    </div>
                    <div class="mb-3 text-center">
                        <input type="submit" value="Enviar" class="btn btn-secondary">
                    </div>
                </form>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-8">
                <?php if(!empty($user)): ?>
                    <p class="alert alert-success text-center">
                        <?= "Bom dia, {$user['name']} {$user['lastName']}" ?>
                    </p>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <script src="../assets/bootstrap/bootstrap.bundle.min.js"></script>

</body>

</html>