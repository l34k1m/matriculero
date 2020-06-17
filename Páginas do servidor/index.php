<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Página inicial - Matrículas</title>
		<link href="bootstrap.min.css" rel="stylesheet">
		<script type="text/javascript" src="script.js"></script>
	</head>
	<body>
		<img src="ufabc.png" class="img-thumbnail" />
		<br />
		<fieldset>
		<legend>Login no Matriculero</legend>
			<form class="col-xs-3" action="entrar.php" method="POST" id="form" name="form">
				<div class="form-group">
				<label for="email">E-mail</label><input class="form-control" placeholder="Digite e-mail" id="email" name="email" type="text" size="42" maxlength="60" />
				</div>
				<div class="form-group">
				<label for="senha">Senha</label><input class="form-control" placeholder="Digite senha" id="senha" name="senha" type="password" size="42" maxlength="32" />
				</div>
				<input type="reset" class="btn btn-default" id="limpa" value="Limpar informações">
				<input type="submit" class="btn btn-primary" id="submit" value="Entrar">
			</form>
		</fieldset>
	</body>
</html>