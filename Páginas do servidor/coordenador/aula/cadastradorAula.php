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

			$_SESSION['diaSemana'] = $_POST['diaSemana'];
			$diaSemana = $_SESSION['diaSemana'];
			
			$_SESSION['horaInicio'] = $_POST['horaInicio'];
			$horaInicio = $_SESSION['horaInicio'];
			
			$_SESSION['horaFim'] = $_POST['horaFim'];
			$horaFim = $_SESSION['horaFim'];
			
			$_SESSION['sala'] = $_POST['sala'];
			$sala = $_SESSION['sala'];
			
			$_SESSION['tipo'] = $_POST['tipo'];
			$tipo = $_SESSION['tipo'];
			
			$_SESSION['campus'] = $_POST['campus'];
			$campus = $_SESSION['campus'];
			
			$_SESSION['siapeDocente'] = $_POST['siapeDocente'];
			$siapeDocente = $_SESSION['siapeDocente'];
			
			$sqlPegaIdTurma = mysqli_query($mysqli, "SELECT idTurma FROM turma WHERE codigo = '$codTurma'");
			$array = mysqli_fetch_array($sqlPegaIdTurma);
			$idTurma = $array['idTurma'];

			if ($sqlAdicionaDisciplina = mysqli_query($mysqli, "INSERT INTO aula (dia_semana, inicio, fim, sala, tipo, campus, Turma_idTurma, Docente_siape) VALUES ('$diaSemana', '$horaInicio', '$horaFim', '$sala', '$tipo', '$campus', '$idTurma', '$siapeDocente')")) {
				mysqli_free_result($sqlAdicionaDisciplina);
				mysqli_close($mysqli);
				header("Location: ../coordenador.php");
			} else {
				echo 'Sua requisição não pôde ser concluída!<br />';
				echo '<a href="cadastroAula.php" title="Voltar à página de cadastro">Voltar</a>';
			}
		?>

	</body>
</html>