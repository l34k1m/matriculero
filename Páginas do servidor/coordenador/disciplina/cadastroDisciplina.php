<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<link href="../../bootstrap.min.css" rel="stylesheet">
		<script type="text/javascript" src="script.js"></script>
	</head>
	<body>
	<fieldset>
		<legend>Cadastro de disciplina</legend>
			<form class="col-xs-3" action="cadastradorDisciplina.php" method="POST" id="form" name="form">
				<div class="form-group">
				<label for="codDisciplina">Código da disciplina</label><input class="form-control" id="codDisciplina" name="codDisciplina" type="text" size="7" maxlength="7" />
				</div>
				<div class="form-group">
				<label for="nome">Nome</label><input class="form-control" id="nome" name="nome" type="text" size="46" maxlength="45" />
				</div>
				<div class="form-group">
				<label for="t">T</label><input class="form-control" id="t" name="t" type="text" size="2" maxlength="2" />
				</div>
				<div class="form-group">
				<label for="p">P</label><input class="form-control" id="p" name="p" type="text" size="2" maxlength="2" />
				</div>
				<div class="form-group">
				<label for="i">I</label><input class="form-control" id="i" name="i" type="text" size="2" maxlength="2" />
				</div>
				<input type="reset" class="btn btn-default" id="limpa" value="Limpar informações" />
				<input type="submit" class="btn btn-primary" id="submit" value="Salvar" />
				
				
			</form>
			
    </fieldset>
	<br />
	<a class="btn btn-default" href="../coordenador.php" title="Voltar à página de coordenador">Voltar</a>
	</body>
</html>