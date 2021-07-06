<?php
    

    $email = $_POST['email'];
    $entrar = $_POST['entrar'];
    $senha = md5($_POST['senha']);
    
    dd($email);
    if (isset($entrar)) {
        $sql="SELECT * FROM Login WHERE email = '$email' AND senha = '$senha'"
        $verifica = mysqli_query($mysqli,$sql) or die("erro ao selecionar");
        if (mysqli_num_rows($verifica)<=0){
            echo"<script language='javascript' type='text/javascript'>
            alert('Email e/ou senha incorretos');window.location
            .href='login.php';</script>";
            die();
        }else{
            setcookie("email",$email);
            header("Location:exibir.php");
        }
    }
?>