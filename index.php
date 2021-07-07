<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<title>Formulário LPW</title>
	<link rel="stylesheet" type="text/css" href="css/bulma.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>

<body>
	<nav class="container-login">
		<p>
			<a href="login.php"><img src="./assets/login-icon.png" alt="Login"></a>
		</p>
	</nav>
	<section class="section">
		<div class="container">
			<div class="column">
				<div class="column">
					<h1 class="title has-text-centered">Formulário de dúvida</h1>
					<form action="enviar.php" method="POST">
						<div class="field">
							<label class="label">Nome</label>
							<div class="control">
								<input type="text" name="nome" class="input" placeholder="Seu nome" required>
							</div>
						</div>
						<div class="field">
							<label class="label">E-mail*</label>
							<div class="control">
								<input type="email" name="email" class="input" placeholder="Seu e-mail" required>
							</div>
						</div>
						<div class="field">
							<label class="label">Dúvida</label required>
							<div class="control">
								<div class="select is-fullwidth">
									<select name="assunto">
										<option>HTML</option>
										<option>CSS</option>
										<option>JavaScript</option>
									</select>
								</div>
							</div>
						</div>
						<div class="field">
							<label class="label">Dúvida*</label>
							<div class="control">
								<textarea name="mensagem" class="textarea" placeholder="Digite a dúvida aqui"
									maxlength="2000" required> </textarea>
							</div>
						</div>

						<div class="field is-grouped">
							<div class="control">
								<button name="enviar" class="button is-link is-medium">Enviar</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
</body>

</html>