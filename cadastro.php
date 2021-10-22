<?php

session_start();
include('conexao.php');


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cadastro.css">
    <title>Cadastre-se</title>
</head>
<body>
    <div id="form">
        <form action="index.php">
            <h2 class="title">Informe seus dados abaixo</h2>
            <label for="Name">Seu nome</label>
            <div class="input">
                <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                <input id="name" name="name" placeholder="Nome completo" type="text">
            </div>
            <label for="username">Nome de usuario</label>
            <div class="input">
                <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                <input id="username" name="username" placeholder="Informe um username" type="text">
            </div>
            <label for="email">Email</label>
            <div class="input">
                <i class="far fa-envelope"></i>
                <input id="email" name="email" placeholder="Informe um email valido" type="text">
            </div>
            <label for="senha">Senha</label>
            <div class="input">
                <i class="fas fa-lock"></i>
                <input id="senha" name="senha" placeholder="Informe uma senha" type="password">
            </div>
            <div id="btn">
                <button type="submit">Cadastrar</button>

            </div>
        </form>
    </div>
</body>
</html>

