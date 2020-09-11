<?php
//CONECTION WITH FILE conectBD.php
    require 'conectBD.php';
//VALUES THAT WILL BE RECEIVED BY THE POST
(isset($_POST['nome']) ? $nome = ($_POST['nome'])  : $nome = '');
(isset($_POST['email']) ? $email = ($_POST['email']) : $email = '');
(isset($_POST['senha']) ? $senha = ($_POST['senha']) : $senha = '');
(isset($_POST['confirmSenha']) ? $confirmSenha = ($_POST['confirmSenha']) : $confirmSenha = '');

    $conect = mysqli_connect('localhost', 'root', '');
    $db = mysqli_select_db($conect, 'para_fixar');
    $log = array($confirmSenha == $senha);
    $query = "SELECT nome, email FROM tb_cadastro WHERE nome = '$nome' OR email = '$email'";
    // echo $query; die;
    $valida = mysqli_query($conect, $query);
    // print_r($valida); die;
    //INSERTING VALUES IN tb_cadastro FROM para_fixar
    //$query = SELECT * FROM tb_cadastro
    //$insert = 'INSERT INTO tb_cadastro(email, nome, senha, confirmarSenha) VALUES($email, $nome, $senha, $confirmSenha)';
    
        if($email != '' || $senha != '' || $log){
        if($valida->num_rows > 0){
            header('Location: cadastro.php?valuevalid=no');
        }else{
            $dbquery = "INSERT INTO tb_cadastro(nome, email, senha, confirmarSenha) VALUES ('$nome', '$email', '$senha', '$confirmSenha')";
            $insert = mysqli_query($conect, $dbquery);
            header('Location: login.php?insert=yes');
        }
    }else{
        header('Location: cadastro.php?valuevalid=no');
    }



/*
        if($email != '' || $senha != '' || $log){
            //header('Location: login.php?insert=yes');
            if($query){
                header('Location: cadastro.php?valuevalid=no');
        }else{
            $dbquery = "INSERT INTO tb_cadastro(nome, email, senha, confirmarSenha) VALUES ('$nome', '$email', '$senha', '$confirmSenha')";
            $insert = mysqli_query($conect, $dbquery);
        }
        $dbquery = "INSERT INTO tb_cadastro(nome, email, senha, confirmarSenha) VALUES ('$nome', '$email', '$senha', '$confirmSenha')";
        $insert = mysqli_query($conect, $dbquery);
        
        }else{
            
        }
        */
        /*}else{
            header('Location: cadastro.php?valuevalid=no');
        }
    }else{
        header('Location: cadastro.php?valuevalid=no');
    }*/


?>