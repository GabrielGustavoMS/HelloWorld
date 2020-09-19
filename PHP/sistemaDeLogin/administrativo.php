<?php

    session_start();
    //Caso  o usuário esteja logado
    if(!empty($_SESSION['id'])){
        echo "Olá ". $_SESSION['nome'] . ", Bem vindo!!! <br>";
        echo "<a href='sair.php'>Sair</a>";
    }else{
        $_SESSION['msg'] = "Por favor, Faça login para continuar!!! ";
       header("Location: login.php");       

    }
?>
