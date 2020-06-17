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
		$ra = $_SESSION['ra'];

		$_SESSION['codTurma'] = $_POST['codTurma'];
		$codTurma = $_SESSION['codTurma'];
		
		$sqlPegaIdTurma = mysqli_query($mysqli, "SELECT idTurma FROM turma WHERE codigo = '$codTurma'");
		$array = mysqli_fetch_array($sqlPegaIdTurma);
		$idTurma = $array['idTurma'];
		echo '$idTurma';
		

		if ($sqlMatricula = mysqli_query($mysqli, "INSERT INTO aluno_turma VALUES ('$ra', '$idTurma')")) {
			header("Location: ../aluno.php");
		} else {
			echo 'Sua requisição não pôde ser concluída!<br />';
			echo '<a href="matricula.php" title="Voltar à página de matrícula">Voltar</a>';
		}
	?>
	</body>
</html>