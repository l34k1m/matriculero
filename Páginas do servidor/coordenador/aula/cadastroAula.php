<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<link href="../../bootstrap.min.css" rel="stylesheet">
		<script type="text/javascript" src="script.js"></script>
	</head>
	<body>
	<fieldset>
		<legend>Cadastro aula</legend>
			<form class="col-xs-3" action="cadastradorAula.php" method="POST" id="form" name="form">
				<div class="form-group">
				<label for="codTurma">Código da turma</label><input class="form-control" id="codTurma" name="codTurma" type="text" size="32" maxlength="16" />
				</div>
				<div class="form-group">
				<label for="diaSemana">Dia da semana</label><input class="form-control" id="diaSemana" name="diaSemana" type="text" size="32" maxlength="7" />
				</div>
				<div class="form-group">
				<label for="horaInicio">Horário de início</label><input class="form-control" id="horaInicio" name="horaInicio" type="text" size="32" maxlength="4" />
				</div>
				<div class="form-group">
				<label for="horaFim">Horário de fim</label><input class="form-control" id="horaFim" name="horaFim" type="text" size="32" maxlength="4" />
				</div>
				<div class="form-group">
				<label for="sala">Sala</label><input class="form-control" id="sala" name="sala" type="text" size="32" maxlength="16" />
				</div>
				<div class="form-group">
				<label for="tipo">Tipo</label><input class="form-control" id="tipo" name="tipo" type="text" size="32" maxlength="7" />
				</div>
				<div class="form-group">
				<label for="campus">Campus</label><input class="form-control" id="campus" name="campus" type="text" size="32" maxlength="32" />
				</div>
				<div class="form-group">
				<label for="siapeDocente">SIAPE do docente</label><input class="form-control" id="siapeDocente" name="siapeDocente" type="text" size="32" maxlength="7" />
				</div>
				<input type="reset" class="btn btn-default" id="limpa" value="Limpar informações" />
				<input type="submit" class="btn btn-primary" id="submit" value="Salvar" />

			</form>
    </fieldset>
	<br />
	<a class="btn btn-default" href="../coordenador.php" title="Voltar à página de coordenador">Voltar</a>
	</body>
</html>