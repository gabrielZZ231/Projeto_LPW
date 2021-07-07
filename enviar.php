<?php

    include_once("conexao.php");

        //Receber os dados do formulário
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
        $assunto = filter_input(INPUT_POST, 'assunto', FILTER_SANITIZE_STRING);
        $mensagem = filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_STRING);

        //Inserir no BD
        $result_msg_cont = "INSERT INTO duvida (nome,email,mensagem,assunto) VALUES ('$nome', '$email', '$mensagem','$assunto')";
        
        $result= mysqli_query($mysqli,$result_msg_cont);

        if (mysqli_insert_id($mysqli)) {
            header("Location:index.php");
            exit();
    
        }else {
            header("Location:index.php");
            exit();
            
        }
?>