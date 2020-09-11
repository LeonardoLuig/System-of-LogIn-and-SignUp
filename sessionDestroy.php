<?php

//DESTROI A SESSÃO DO USUÁRIO
    session_destroy();

    header('Location: login.php');

?>