<?php

    //if(isset(session_start())){
       // header('Location: logado.php');
    //}

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
            .background{
                border-radius: 10px 10px 10px;
                padding: 2%;
            }
        </style>
    </head>

    <body class="bg-info">
        
        
        <div class="container bg-warning">
        <?php
            if(isset($_GET['insert']) && $_GET['insert'] == 'yes'){
        ?>
        <div class="bg-success background">
                    <h6 class="text-dark">Informçaões salvas, faça Login para continuar!</h6>
        </div>
            <?php } ?>
        <span class="text-info"><h2>Cadastrar-se</h2></span>
        <br>
            <form action="tratamentoLogin.php" method="POST">
                <div class="form-group">
                <label for="login" class="text-primary"> Nome de Usuário ou Email:<br>
                    <input type="text" class="form-control input-lg" name="login" placeholder="Digite seu nome de usuário ou email">
                </label>
                </div><br>
                <div class="form-group">
                <label for="senha" class="text-primary"> Senha:<br>
                    <input type="password" class="form-control" name="senha" placeholder="Digite sua senha">
                </label><br><br>
                </div>

                <?php
                    if(isset($_GET['logado']) && $_GET['logado'] == 'nao'){
                ?>
                    <div class="text-danger">
                        Os valores digitados não se encontram no banco!
                    </div>
                    <?php } ?>

                <button type="submit" class="btn btn-success">Entrar</button>
            </form>
            <h6>Não passui cadastro?</h6>
            <a href="cadastro.php"><button class="btn btn-info">Cadastrar-se</button></a>
        </div>
    </body>
</html>