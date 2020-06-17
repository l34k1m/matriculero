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
			
			$sqlPegaIdTurma = mysqli_query($mysqli, "SELECT idTurma FROM turma WHERE codigo = '$codTurma'");
			$array = mysqli_fetch_array($sqlPegaIdTurma);
			$idTurma = $array['idTurma'];
			mysqli_free_result($sqlPegaIdTurma);
			
			$sqlContaAulas = mysqli_query($mysqli, "SELECT count(*) FROM aula WHERE Turma_idTurma = '$idTurma'");

			if($array['count(*)'] < 1) {
				echo 'Sua requisição não pôde ser concluída!<br />Essa turma não existe ou ainda não possui aulas.<br /><br />';
				echo '<a href="removeAula.php" title="Voltar à página de remoção">Voltar</a>';
			} else {
				$removeAulas = mysqli_query($mysqli, "DELETE FROM aula WHERE Turma_idTurma = '$idTurma'");
				mysqli_free_result($removeAulas);
				mysqli_close($mysqli);
				header("Location: ../coordenador.php");
			}
		?>

	</body>
</html>