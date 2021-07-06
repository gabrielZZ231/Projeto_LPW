<?php
    $login_cookie = $_COOKIE['email'];
    if(isset($login_cookie)){
      echo"<h1>Bem-Vindo, $login_cookie<h1> <br>";
      echo"<h2>Essas são as duvidas dos seus alunos <h2>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Lista de duvidas</title>
	<link rel="stylesheet" type="text/css" href="css/bulma.min.css">
</head>
<body>
	<section class="section">
		<div class="container">
			<div class="column">
				<div class="column">
					<h1 class="title has-text-centered">Formulário de dúvida</h1>
					<form action="enviar.php" method="POST">
						<div class="field">
</body>
</html>