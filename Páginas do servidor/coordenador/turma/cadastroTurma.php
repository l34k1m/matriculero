<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<link href="../../bootstrap.min.css" rel="stylesheet">
		<script type="text/javascript" src="script.js"></script>
	</head>
	<body>
	<fieldset>
		<legend>Cadastro turma</legend>
			<form class="col-xs-3" action="cadastradorTurma.php" method="POST" id="form" name="form">
				<div class="form-group">
				<label for="codTurma">Código da turma</label><input class="form-control" id="codTurma" name="codTurma" type="text" size="16" maxlength="16" />
				</div>
				<div class="form-group">
				<label for="codDisciplina">Código da Disciplina</label><input class="form-control" id="codDisciplina" name="codDisciplina" type="text" size="7" maxlength="7" />
				</div>
				<div class="form-group">
				<label for="quad">Quadrimestre</label><input class="form-control" id="quad" name="quad" type="text" size="6" maxlength="6" />
				</div>
				<div class="form-group">
				<label for="vagas">Vagas</label><input class="form-control" id="vagas" name="vagas" type="text" size="3" maxlength="3" />
				</div>
				<input type="reset" class="btn btn-default" id="limpa" value="Limpar informações" />
				<input type="submit" class="btn btn-primary" id="submit" value="Salvar" />
				<br /><br />
				
			</form>
    </fieldset>
	<a class="btn btn-default" href="../coordenador.php" title="Voltar à página de coordenador">Voltar</a>
	</body>
</html>