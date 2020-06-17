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
			
			$_SESSION['nome'] = $_POST['nome'];
			$nome = $_SESSION['nome'];
			
			$_SESSION['t'] = $_POST['t'];
			$t = $_SESSION['t'];
			
			$_SESSION['p'] = $_POST['p'];
			$p = $_SESSION['p'];
			
			$_SESSION['i'] = $_POST['i'];
			$i = $_SESSION['i'];

			if ($sqlAdicionaDisciplina = mysqli_query($mysqli, "INSERT INTO disciplina VALUES ('$codDisciplina', '$nome', '$t', '$p', '$i', '$numCoord')")) {
				header("Location: ../coordenador.php");
			} else {
				echo 'Sua requisição não pôde ser concluída!<br />';
				echo '<a href="cadastroDisciplina.php" title="Voltar à página de cadastro">Voltar</a>';
			}
			
		?>

	</body>
</html>