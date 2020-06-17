<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<link href="../../bootstrap.min.css" rel="stylesheet">
		<script type="text/javascript" src="script.js"></script>
	</head>
	<body>
	<fieldset>
		<legend>Remoção de turma</legend>
			<form class="form-inline" action="removedorTurma.php" method="POST" id="form" name="form">
				<div class="col-xs-3">
				<label for="codTurma">Código da turma</label><input class="form-control" id="codTurma" name="codTurma" type="text" size="16" maxlength="16" />
				</div>
				<input type="reset" class="btn btn-default" id="limpa" value="Limpar informações" />
				<input type="submit" class="btn btn-primary" id="submit" value="Salvar" />
			</form>
    </fieldset>
	<br />
	<a class="btn btn-default" href="../coordenador.php" title="Voltar à página de coordenador">Voltar</a>
	</body>
</html>