<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<link href="../../bootstrap.min.css" rel="stylesheet">
		<script type="text/javascript" src="script.js"></script>
	</head>
	<body>
	<fieldset>
		<legend>Matrícula em turma</legend>
			<form class="col-xs-3" action="matricular.php" method="POST" id="form" name="form">
				<div class="form-group">
				<label for="codTurma">Código da turma</label><input class="form-control" id="codTurma" name="codTurma" type="text" size="16" maxlength="16" />
				</div>
				<input type="reset" class="btn btn-default" id="limpa" value="Limpar informações" />
				<input type="submit" class="btn btn-primary" id="submit" value="Salvar" />
			</form>
    </fieldset>
	<br />
	<a class="btn btn-default" href="../aluno.php" title="Voltar à página de aluno">Voltar</a>
	</body>
</html>