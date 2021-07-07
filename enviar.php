<?php

    include_once("conexao.php");
    session_start();
        //Receber os dados do formulário
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $assunto = filter_input(INPUT_POST, 'assunto', FILTER_SANITIZE_STRING);
        $mensagem = filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_STRING);
        //Verifica se o email é valido
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $_SESSION['msg']="<div class='alert alert-success' role='alert'>Erro na validação do email</div>";
            header("Location:index.php");
            exit();
          }
        //Inserir no BD
        $query = "INSERT INTO duvida (nome,email,mensagem,assunto) VALUES ('$nome', '$email', '$mensagem','$assunto')";
        
        $result= mysqli_query($mysqli,$query);

        if (mysqli_insert_id($mysqli)) {
            $_SESSION['msg']="<div class='alert alert-success' role='alert'>Dúvida enviada com sucesso</div>";
            header("Location:index.php");
            exit();
    
        }else {
            $_SESSION['msg']="<div class='alert alert-success' role='alert'>Dúvida não enviada</div>";
            header("Location:index.php");
            exit();
            
        }
?>