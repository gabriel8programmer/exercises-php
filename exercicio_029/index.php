<?php

$data = [];
$currentName = "";
$currentLastName = "";

function login(){
    global $data, $currentName, $currentLastName;
    //get name and lastName
    $name = isset($_POST["text_nome"])? $_POST["text_nome"]: "" ;
    $lastName = isset($_POST["text_apelido"])? $_POST["text_apelido"]: "" ;

    if (empty($name) || empty($lastName)){
        return;
    }

    //define current name and lastName
    $currentName = $name;
    $currentLastName = $lastName;
    //define user
    $data = [
        "name" => $name,
        "lname" => $lastName,
    ];
}

//test request post
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
    <title>Exercicio 29</title>
    <link rel="stylesheet" href="../assets/bootstrap/bootstrap.min.css">
</head>

<body>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-sm-4">
                <form action="index.php" method="post">
                    <div class="mb-3">
                        <input type="text" name="text_nome" class="form-control" placeholder="Nome" value="<?= (!empty($currentName))? $currentName :"" ?>">
                    </div>
                    <div class="mb-3">
                        <input type="text" name="text_apelido" class="form-control" placeholder="Apelido" value="<?= (!empty($currentLastName))? $currentLastName :"" ?>">
                    </div>
                    <div class="mb-3 text-center">
                        <input type="submit" value="Enviar" class="btn btn-secondary">
                    </div>
                </form>
            </div>
        </div>
        <div class="row justify-content-center">
            <?php if (!empty($data)) : ?>
                <div class="col-7">
                    <p class="alert alert-success text-success text-center">
                        <?= "Bom dia, {$data['name']} {$data['lname']}." ?>    
                    </p>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <script src="../assets/bootstrap/bootstrap.bundle.min.js"></script>

</body>

</html>