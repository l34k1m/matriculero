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

			$_SESSION['codDisciplina'] = $_POST['codDisciplina'];
			$codDisciplina = $_SESSION['codDisciplina'];		

			$sqlContaLinhas = mysqli_query($mysqli, "SELECT count(*) FROM disciplina WHERE idDisciplina = '$codDisciplina'");

			$array = mysqli_fetch_array($sqlContaLinhas);
			if($array['count(*)'] != 1) {
				echo '<h3>Sua requisição não pôde ser concluída!</h3><br />Essa disciplina não existe.<br /><br />';
				echo '<a href="removeDisciplina.php" title="Voltar à página de remoção">Voltar</a>';
			} else {
				$sqlRemoveDisciplina = mysqli_query($mysqli, "DELETE FROM disciplina WHERE idDisciplina = '$codDisciplina'");
				$sqlContaLinhas = mysqli_query($mysqli, "SELECT count(*) FROM disciplina WHERE idDisciplina = '$codDisciplina'");
				$array = mysqli_fetch_array($sqlContaLinhas);
				if($array['count(*)'] == 1) {
					echo '<h3>Sua requisição não pôde ser concluída!</h3><br />Essa disciplina ainda possui turmas associadas.<br /><br />';
					echo '<a href="removeDisciplina.php" title="Voltar à página de remoção">Voltar</a>';
				} else {
					header("Location: ../coordenador.php");
				}
			}
		?>

	</body>
</html>