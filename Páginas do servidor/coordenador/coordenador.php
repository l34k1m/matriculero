<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Página do coordenador</title>
		<link href="../bootstrap.min.css" rel="stylesheet">
		<script type="text/javascript" src="script.js"></script>
	</head>
	<body>
		<h1><span class="label label-default">Página do coordenador</span></h1>
		<a class="btn btn-default" href="disciplina/cadastroDisciplina.php" title="Cadastre uma disciplina">Cadastro de disciplina</a>
		<a class="btn btn-default" href="disciplina/removeDisciplina.php" title="Remova uma disciplina">Remoção de disciplina</a>
		<a class="btn btn-default" href="turma/cadastroTurma.php" title="Cadastre uma turma">Cadastro de turma</a>
		<a class="btn btn-default" href="turma/removeTurma.php" title="Remova uma turma">Remoção de turma</a>
		<a class="btn btn-default" href="aula/cadastroAula.php" title="Cadastre uma aula">Cadastro de aula</a>
		<a class="btn btn-default" href="aula/removeAula.php" title="Remova uma aula">Remoção de aula</a>
		<a class="btn btn-primary" href="../sair.php" title="Sair">Sair</a>
		<?php
			require '../mysqli.php'; //arquivo de conexão

			$sqlListaDisciplinas = mysqli_query($mysqli, "SELECT idDisciplina, nome, t, p, i FROM disciplina ORDER BY nome") or die(mysql_error());
			echo '<h2 align="center">Disciplinas atualmente cadastradas</h2>';
			echo '<table class="table table-striped">';
			echo '<tr><td>Código</td><td>Nome</td><td>T</td><td>P</td><td>I</td></tr>';
			while($array = mysqli_fetch_array($sqlListaDisciplinas)) {
				//mostra cada linha do resultado da SELECT
				echo "<tr><td>".$array['idDisciplina']."</td><td>".$array['nome']."</td><td>".$array['t']."</td><td>".$array['p']."</td><td>".$array['i']."</td></tr>";
			}
			echo '</table>';
			echo '<br /><br />';
			
			$sqlListaTurmas = mysqli_query($mysqli, "SELECT disciplina.nome, turma.idTurma, turma.codigo, turma.quadrimestre, turma.vagas FROM turma, disciplina WHERE turma.Disciplina_idDisciplina = disciplina.idDisciplina ORDER BY disciplina.nome") or die(mysql_error());
			echo '<h2 align="center">Turmas atualmente cadastradas</h2>';
			echo '<table class="table">';
			echo '<tr><td><b>Disciplina</b></td><td><b>Código</b></td><td><b>Quadri.</b></td><td><b>Vagas</b></td></tr>';
			while($array = mysqli_fetch_array($sqlListaTurmas))
			{
				//mostra cada linha do resultado da SELECT
				echo "<tr><td>".$array['nome']."</td><td>".$array['codigo']."</td><td>".$array['quadrimestre']."</td><td>".$array['vagas']."</td></tr>";
				$sqlListaAulas = mysqli_query($mysqli, "SELECT dia_semana, inicio, fim, sala, tipo, campus FROM aula WHERE Turma_idTurma = $array[idTurma]");
				while($array2 = mysqli_fetch_array($sqlListaAulas)) {
					echo '<tr><td>Dia da semana</td><td>Início</td><td>Fim</td><td>Sala</td><td>Tipo</td><td>Campus</td></tr>';
					echo '<tr><td><b>'.$array2['dia_semana'].'</b></td><td>'.$array2['inicio'].'h</td><td>'.$array2['fim'].'h</td><td>'.$array2['sala'].'</td><td>'.$array2['tipo'].'</td><td>'.$array2['campus'].'</td></tr>';
				}
			}
			echo '</table>';
			echo '<br /><br />';
			
			$sqlListaDocentes = mysqli_query($mysqli, "SELECT siape, nome FROM docente") or die(mysql_error());
			echo '<h2 align="center">Docentes atualmente cadastrados</h2>';
			echo '<table class="table table-striped">';
			echo '<tr><td>SIAPE</td><td>Nome</td></tr>';
			while($array = mysqli_fetch_array($sqlListaDocentes))
			{
				//mostra cada linha do resultado da SELECT
				echo "<tr><td>".$array['siape']."</td><td>".$array['nome']."</td></tr>";
			}
			echo '</table>';
			
			
		?>

	</body>
</html>