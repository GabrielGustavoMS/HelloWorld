<?php
session_start();

//Inclui uma vez a 
include_once("conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <!-- Styles bootstrap 4 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>
        Votação
    </title>

<body>
    <section class="container">
        <h1 class="text-center mt-5 mb-5">Vote no produto desejado!!!</h1>
        <section class="mt-3 mb-3 pb-5">
        <?php
        
        if (isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        ?>
        </section>
        <?php
        //Pesquisar os produtos
        $_sqlquery = "SELECT * FROM produtos";
        //Tabela resultado da query
        $_produtos = mysqli_query($_connection, $_sqlquery);
        //Percorre tabela e associa a variavel $_row as linhas de $_produtos
       
        while ($_row = mysqli_fetch_assoc($_produtos)) {
            echo "Número do produto: " . $_row['id'] . "<br>";
            echo "Nome: " . $_row['nome'] . "<br>";
            echo "Quantidade de votos: " . $_row['qtd_voto'] . "<br>";
            echo "<a class='btn btn-primary' href='votar.php?id=" . $_row['id'] . "'> Votar</a> <hr>";
        }
        ?>
    

    </section>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</head>