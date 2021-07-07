<?php
include('verifica_login.php');
include_once('conexao.php');


$query="SELECT * FROM duvida";
$con= $mysqli->query($query) or die($mysqli->error);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Formulário LPW</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bulma.min.css">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>

<body>
    <nav class="bnt-logout">
        <a href="logout.php"><img src="./assets/logout-icon.png"></a>
    </nav>
    <section class="section">
        <div class="container">
            <div class="column">
                <div class="column">
                    <h1 class="title has-text-centered">Dúvidas</h1>
                    <?php
                        if (isset( $_SESSION['msg'])) {
                            echo  $_SESSION['msg'];
                            unset  ($_SESSION['msg']);
                        }
                    ?>
                    <div class="table-responsive">
                        <table class="table">
                            <tr class="table is-striped">
                                <td>ID</td>
                                <td>Nome</td>
                                <td>Email</td>
                                <td>Assunto</td>
                                <td>Dúvida</td>
                            </tr>
                            <?php while ($dado = $con->fetch_array()) { ?>
                            <tr class="table is-striped">
                                <td><?php echo $dado['id'];?></td>
                                <td><?php echo $dado['nome'];?></td>
                                <td><?php echo $dado['email'];?></td>
                                <td><?php echo $dado['assunto'];?></td>
                                <td><?php echo $dado['mensagem'];?></td>
                                <td><a href="excluir_duvida.php?codigo=<?php echo $dado['id'];?>">Excluir</a></td>
                            </tr>
                            <?php } ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>