<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<script type="text/javascript" src="script.js"></script>
	</head>
	<body>
	<?php

		session_start();
		require '../../mysqli.php'; //arquivo de conexão
		$numCoord = $_SESSION['idCoordenador'];
		
		$_SESSION['codDisciplina'] = $_POST['codDisciplina'];
		$codDisciplina = $_SESSION['codDisciplina'];
		
		$_SESSION['quad'] = $_POST['quad'];
		$quad = $_SESSION['quad'];
		
		$_SESSION['vagas'] = $_POST['vagas'];
		$vagas = $_SESSION['vagas'];
		
		$_SESSION['codTurma'] = $_POST['codTurma'];
		$codTurma = $_SESSION['codTurma'];

		if ($sqlAdicionaDisciplina = mysqli_query($mysqli, "INSERT INTO turma (codigo, quadrimestre, vagas, Coordenador_idCoordenador, Disciplina_idDisciplina) VALUES ('$codTurma', '$quad', '$vagas', '$numCoord', '$codDisciplina')")) {
			header("Location: ../coordenador.php");
		} else {
			echo 'Sua requisição não pôde ser concluída!<br />';
			echo '<a href="cadastroTurma.php" title="Voltar à página de cadastro">Voltar</a>';
		}
		
	?>
	</body>
</html>