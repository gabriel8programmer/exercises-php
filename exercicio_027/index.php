<?php 

$user = [];
$error = "";

function login(){
    global $user;
    $name = $_POST["text_nome"];
    $lastName = $_POST["text_apelido"];

    if (empty($name) || empty($lastName)){
        global $error;
        $error = "Erro! Nome e Sobrenome são obrigatórios";
        return;
    }

    $user = [
        "name" => $name,
        "lastName" => $lastName
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
    <title>Exercicio 27</title>
    <link rel="stylesheet" href="../assets/bootstrap/bootstrap.min.css">
</head>

<body>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-sm-4">
                <form action="index.php" method="post">
                    <div class="mb-3">
                        <input type="text" name="text_nome" class="form-control" placeholder="Nome">
                    </div>
                    <div class="mb-3">
                        <input type="text" name="text_apelido" class="form-control" placeholder="Apelido">
                    </div>
                    <div class="mb-3 text-center">
                        <input type="submit" value="Enviar" class="btn btn-secondary">
                    </div>
                </form>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-7">
                <?php if (!empty($user)): ?>
                    <p class="alert alert-success text-center">
                        <?= "Bom dia, {$user['name']} {$user['lastName']}."; ?>
                    </p>
                <?php elseif(!empty($error)): ?>
                    <p class="alert alert-danger text-center">
                        <?= $error ?>
                    </p>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <script src="../assets/bootstrap/bootstrap.bundle.min.js"></script>

</body>

</html>