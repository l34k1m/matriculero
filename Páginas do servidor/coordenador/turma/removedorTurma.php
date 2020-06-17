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

			$_SESSION['codTurma'] = $_POST['codTurma'];
			$codTurma = $_SESSION['codTurma'];

			$sqlContaLinhas = mysqli_query($mysqli, "SELECT count(*) FROM turma WHERE codigo = '$codTurma'");

			$array = mysqli_fetch_array($sqlContaLinhas);
			if($array['count(*)'] != 1) {
				echo '<h3>Sua requisição não pôde ser concluída!</h3><br />Essa turma não existe.<br /><br />';
				echo '<a href="removeTurma.php" title="Voltar à página de remoção">Voltar</a>';
			} else {
				$sqlRemoveTurma = mysqli_query($mysqli, "DELETE FROM turma WHERE codigo = '$codTurma'");
				$sqlContaLinhas = mysqli_query($mysqli, "SELECT count(*) FROM turma WHERE codigo = '$codTurma'");
				$array = mysqli_fetch_array($sqlContaLinhas);
				if($array['count(*)'] == 1) {
					echo '<h3>Sua requisição não pôde ser concluída!</h3><br />Essa turma ainda possui aulas associadas.<br /><br />';
					echo '<a href="removeTurma.php" title="Voltar à página de remoção">Voltar</a>';
				} else {
					header("Location: ../coordenador.php");
				}
			}
		?>

	</body>
</html>