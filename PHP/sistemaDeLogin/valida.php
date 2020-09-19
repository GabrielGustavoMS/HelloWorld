<?php
    session_start();
    include_once("conexao.php");
    //rebece-se o valor de btn login pelo metodo post
    // removendo tags e codigicando chars especiasi ( FILTER_SANITIZE_STRING)
    $_btnLogin = filter_input(INPUT_POST, 'btnLogin', FILTER_SANITIZE_STRING);

    //Aqui verifica-se se o usuário clicou no botão ou tentou acessa valida.php por get
    if($_btnLogin){
            $_user = filter_input(INPUT_POST,'user', FILTER_SANITIZE_STRING);
            $_password = filter_input(INPUT_POST,'password',FILTER_SANITIZE_STRING);
            
            
            //Verificar se a senha ou user estão vazios
            if((!empty($_user) AND (!empty($_password)))){
                //Gerar senha criptografada
                //echo password_hash($_password, PASSWORD_DEFAULT);
                $_sqlquery = "SELECT id, nome, email, senha 
                              FROM  usuarios
                              where usuario='$_user' 
                              LIMIT 1";
                //$_usuario guarda as informações resultantes da sqlquery
                $_usuario = mysqli_query($_connection,$_sqlquery);

                //Se user existir no db
                if($_usuario){
                    //Associar infos com var linhas
                    //Linha com colunas especificadas sqlquery
                    $_row = mysqli_fetch_assoc($_usuario);

                    //verifica se a senha esta correta.
                    if(password_verify($_password,$_row['senha'])){
                        
                        //Guarndando dados do usuário na sessão
                        $_SESSION['id'] = $_row['id'];
                        $_SESSION['nome'] = $_row['nome'];
                        $_SESSION['email'] = $_row['email'];                       

                        header("Location: administrativo.php");
                    }else{
                        $_SESSION['msg'] ="Usuário ou senha incorreta";
                        header("Location: login.php");
                    }
                }


            }else{
                $_SESSION['msg'] = "Usuário ou senha incorretos!";
                header("Location: login.php");
            }
    }else{
        //Caso tenha acessado por get, ele é redirecionado para a pag de login
        $_SESSION['msg'] = "Página não encontrada";
        header("Location: login.php");
    }

?>