<?php

$usuario = 'joao@gmail.com';
$senha = '$2y$10$RbxfGXTKxXDFwqyjx.kscOYIclxTDRhICCCoEMtmeagCG0fekFfq6'; 
// abc123

$message = "";

//get values of the inputs
$user = isset($_POST["text_usuario"]) ? $_POST["text_usuario"] : "";
$pass = isset($_POST["text_senha"]) ? $_POST["text_senha"] : "";

if ($usuario == $user && password_verify($pass, $senha)) {
    $message = "Dados corretos, bem vindo!";
} else {
    $message = "Erro. Dados incorretos!";
}

echo $message;
