<?php
//Inicia-se a sessão - antes de tudo
session_start();

include_once("conexao.php");
//Verificar se está vindo a variável id pelo url - por isso isset($_GET['id])
if (isset($_GET['id'])) {
    if (isset($_COOKIE['voto_cont'])) {
        $_SESSION['msg'] = "<span class='alert alert-danger' role='alert'> Você já votou! </span><br>";
        header("Location: index.php");
    } else {
        setcookie('voto_cont',$_SERVER['REMOTE_ADDR'], time() + 5);
        $_sqlquery = "UPDATE produtos SET qtd_voto = qtd_voto + 1
                    WHERE id='" . $_GET['id'] . "'";
        $_produtosAtualizados = mysqli_query($_connection, $_sqlquery);
        if (mysqli_affected_rows($_connection)) {
            //Aqui setamos a variavel global msg na sessão 
            $_SESSION['msg'] = "<span class='alert alert-success' role='alert'> Voto recebido com sucesso!</span><br>";

            header("Location: index.php"); //Redirecionamento
        } else {
            $_SESSION['msg'] = "<span class='alert alert-danger' role='alert'> Não foi possível contabilizar seu voto </span><br>";
            header("Location: index.php"); //Redirecionamento
        }
    }
}
