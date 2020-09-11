<?php
//POST DE LOGIN
    require 'conectBD.php';
    $login = $_POST['login'];
    $senha = $_POST['senha'];
//BANCO DE DADOS tb_cadastro
    
    //$insert = 'INSERT INTO tb_cadastro(email, nome, senha, confirmarSenha) VALUES($email, $nome, $senha, $confirmSenha)';
//TRATAMENTO DO LOGIN]
    $conect = mysqli_connect('localhost', 'root', '');
    $db = mysqli_select_db($conect, 'para_fixar');
    $query = "SELECT * FROM tb_cadastro WHERE ('$login' = nome OR '$login' = email) AND '$senha' = senha";
    $validate = mysqli_query($conect, $query);
    //print_r($_POST);

    if($validate->num_rows>0){
       header('Location: logado.php');
        session_start();
        /*
        echo '<pre>';
        print_r($validate);
        echo '</pre>';
        */
       
        $Sessao = rand(1, 100);
    }else{
       header('Location: login.php?logado=nao');
    }

?>