<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<link href="../bootstrap.min.css" rel="stylesheet">
		<script type="text/javascript" src="script.js"></script>
	</head>
	<body>
		<h1><span class="label label-default">Página do aluno</span></h1>
		<a class="btn btn-default" href="matricula/matricula.php" title="Matricule-se!">Matrícula em turmas</a>
		<a class="btn btn-default" href="matricula/removeMatricula.php" title="Altere uma matrícula">Remover matrícula em turmas</a>
		<a class="btn btn-primary" href="../sair.php" title="Sair">Sair</a>
		<br />
		<?php
		
		session_start();
		$ra = $_SESSION['ra'];
		require '../mysqli.php';
		
		echo '<h2 align="center">Turmas em que está matriculado</h2>';

		$sqlMatriculado = mysqli_query($mysqli, "SELECT count(*) FROM aluno_turma WHERE Aluno_ra = '$ra'");
		$arrayId = mysqli_fetch_array($sqlMatriculado);
		if ($arrayId['count(*)'] < 1) {
			echo '<h4 align="center"><i>Nenhuma ainda</i></h4>';
			echo '<br /><br />';
		} else {
		
		$sqlMatriculado = mysqli_query($mysqli, "SELECT Turma_idTurma FROM aluno_turma WHERE Aluno_ra = '$ra'");
		echo '<table class="table">';
		echo '<tr><td><b>Disciplina</b></td><td><b>Código</b></td><td><b>Vagas</b></td></tr>';
		
		while($arrayId = mysqli_fetch_array($sqlMatriculado))
		{
			$pegaId = $arrayId['Turma_idTurma'];
			$sqlTurmasMatriculado = mysqli_query($mysqli, "SELECT idTurma, nome, codigo, vagas FROM disciplina, turma WHERE turma.idTurma = '$pegaId' AND turma.Disciplina_idDisciplina = disciplina.idDisciplina ORDER BY nome");
			while ($arrayT = mysqli_fetch_array($sqlTurmasMatriculado))
			{
				echo "<tr><td>".$arrayT['nome']."</td><td>".$arrayT['codigo']."</td><td>".$arrayT['vagas']."</td></tr>";
				$sqlListaAulas = mysqli_query($mysqli, "SELECT dia_semana, inicio, fim, sala, tipo, campus FROM aula WHERE Turma_idTurma = $arrayT[idTurma]");
				while($array2 = mysqli_fetch_array($sqlListaAulas)) {
					echo '<tr><td>Dia da semana</td><td>Início</td><td>Fim</td><td>Sala</td><td>Tipo</td><td>Campus</td></tr>';
					echo '<tr><td><b>'.$array2['dia_semana'].'<b></td><td>'.$array2['inicio'].'h</td><td>'.$array2['fim'].'h</td><td>'.$array2['sala'].'</td><td>'.$array2['tipo'].'</td><td>'.$array2['campus'].'</td></tr>';
				}
			
			}
		}
		mysqli_free_result($sqlMatriculado);
		mysqli_free_result($sqlTurmasMatriculado);
		echo '</table>';
		echo '<br /><br />';
		}
		
		/* As turmas matriculadas terminam aqui */

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
				echo '<tr><td><b>'.$array2['dia_semana'].'<b></td><td>'.$array2['inicio'].'h</td><td>'.$array2['fim'].'h</td><td>'.$array2['sala'].'</td><td>'.$array2['tipo'].'</td><td>'.$array2['campus'].'</td></tr>';
			}
		}
		mysqli_free_result($sqlListaAulas);
		echo '</table>';
		echo '<br /><br />';
		?>
	</body>
</html>