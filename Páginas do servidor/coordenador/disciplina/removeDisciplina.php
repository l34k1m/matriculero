<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<link href="../../bootstrap.min.css" rel="stylesheet">
		<script type="text/javascript" src="script.js"></script>
	</head>
	<body>
	<fieldset>
		<legend>Remoção de disciplina</legend>
			<form class="form-inline" action="removedorDisciplina.php" method="POST" id="form" name="form">
				<div class="col-xs-2">
				<label for="codDisciplina">Código da disciplina</label><input class="form-control" id="codDisciplina" name="codDisciplina" type="text" size="7" maxlength="7" />
				</div>
				<input type="reset" class="btn btn-default" id="limpa" value="Limpar informações" />
				<input type="submit" class="btn btn-primary" id="submit" value="Salvar" />
			</form>
    </fieldset>
	<br />
	<a class="btn btn-default" href="../coordenador.php" title="Voltar à página de coordenador">Voltar</a>
	</body>
</html>