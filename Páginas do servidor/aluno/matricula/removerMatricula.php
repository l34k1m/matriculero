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
		
		$sqlContaLinhas = mysqli_query($mysqli, "SELECT count(*), idTurma FROM turma WHERE codigo = '$codTurma'");
		$array = mysqli_fetch_array($sqlContaLinhas);
		$contaLinhas = $array['count(*)'];
		$idTurma = $array['idTurma'];
		if ($contaLinhas < 1) {
			
		} else {
			$sqlContaLinhas = mysqli_query($mysqli, "DELETE FROM aluno_turma WHERE Aluno_ra = '$ra' AND Turma_idTurma = '$idTurma'");
			header("Location: ../aluno.php");
		}
		
		/*
		if ($sqlMatricula = mysqli_query($mysqli, "DELETE INTO aluno_turma VALUES ('$ra', '$idTurma')")) {
			
		} else {
			echo 'Sua requisição não pôde ser concluída!<br />';
			echo '<a href="matricula.php" title="Voltar à página de matrícula">Voltar</a>';
		}
		*/
	?>
	</body>
</html>