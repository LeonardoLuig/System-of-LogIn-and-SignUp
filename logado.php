<?php
//SESSÃO ABERTA 
    //require 'tratamentoLogin.php';

    session_start();

    echo 'Olá, vc está logado';
?>

<html>

    <head>
        <meta charset="utf-8">
        <title>Cadastro de usuário</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
        <a href="sessionDestroy.php"><button class="text-warning btn btn-danger">SAIR</button></a>
    </body>

</html>

   