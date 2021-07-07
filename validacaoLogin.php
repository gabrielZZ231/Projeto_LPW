<?php
    session_start();
    include_once("conexao.php");
    //Verifica se está vazio
    if (empty($_POST['email'])||empty($_POST['senha'])) {
        header("Location:login.php");
        exit();
    }
    //Faz validações inclusive previne de possíveis ataques SQL injection
    $email = mysqli_real_escape_string($mysqli, $_POST['email']);
    $senha = mysqli_real_escape_string($mysqli, $_POST['senha']);
   
    //Senha criptrografada em MD5 para evitar SQL injection 1'or'1'='1 
    $sql="SELECT * FROM login WHERE email = '$email' AND senha = md5('$senha')";
    
    $verifica = mysqli_query($mysqli,$sql);
        
    // Número de linhas do BD
        
    $row=mysqli_num_rows($verifica);
        
    //Se tem uma linha com essas especificações 
        
    if ($row==1){
        $_SESSION['email'] = $email;
        header("Location:painel.php");
        exit();
    }else{
        echo"<script language='javascript' type='text/javascript'>
            alert('Email e/ou senha incorretos');
            window.location.href='login.php';
        </script>";
        die();
    }
?>