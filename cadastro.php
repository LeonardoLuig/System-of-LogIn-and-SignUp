<?php

    //if(isset($Sessao)){
       // header('Location: logado.php');
   // }

?>

<html>

    <head>
        <meta charset="utf-8">
        <title>Cadastro de usuário</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <style>
            .container{
                margin-top: 5%;
                padding: 2%;
                width: 30%;
                margin-right: 0 auto;
                margin-left: 0 auto;
                text-align: justify;
                border-radius: 10px 10px 10px;
            }
            label, button{
                width: 100%;
            }
        </style>

    </head>

    <body class="bg-info">
        
        <div class="container bg-warning">
        <span class="text-info"><h2>Entrar</h2></span>
            <form action="tratamentoCadastro.php" method="POST">
                <label for="email" class="text-primary"> Email:<br>
                    <input type="text" name="email" class="form-control input-lg" placeholder="Digite seu email">
                </label><br>
                <label for="nome" class="text-primary"> Nome de Usuário:<br>
                    <input type="text" name="nome" class="form-control input-lg" placeholder="Digite seu nome de usuário">
                </label><br>
                <label for="senha" class="text-primary"> Senha:<br>
                    <input type="password" name="senha" class="form-control input-lg" placeholder="Digite sua senha">
                </label><br>
                <label for="confirmSenha" class="text-primary"> Confirmar Senha:<br>
                    <input type="password" name="confirmSenha" class="form-control input-lg" placeholder="Digite sua senha novamente">
                </label><br><br>

                <?php
                    if(isset($_GET['valuevalid']) && $_GET['valuevalid'] == 'no'){
                ?>
                    <div class="text-danger">
                        Email e/ou Nome de Usuário já estão em uso!
                    </div>
                    <?php } ?>
                <button type="submit" class="btn btn-success">Cadastrar-se</button>
            </form>
            <h6>Ja passui cadastro?</h6>
            <a href="login.php"><button class="btn btn-info">Entrar</button></a>
        </div>

    </body>

</html>