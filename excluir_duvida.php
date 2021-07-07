<?php
    session_start();
    include_once("conexao.php");
    $id = filter_input(INPUT_GET,'codigo',FILTER_SANITIZE_NUMBER_INT);
    $query = "DELETE FROM duvida WHERE id='$id'";
    $result=mysqli_query($mysqli,$query);

    if (mysqli_affected_rows($mysqli)) {
        $_SESSION['msg']="<div class='alert alert-success' role='alert'>Usúario apagado com sucesso</div>";
        header("Location:painel.php");
    }else {
        $_SESSION['msg']="<div class='alert alert-danger' role='alert'>Usúario não foi apagado</div>";
        header("Location:painel.php");
    }

?>