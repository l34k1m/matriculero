<?php
	session_start(); //inicia sessão (importante para gerenciar credenciais e utilizar variáveis globais)
	require 'mysqli.php'; //arquivo de conexão
	$email = $_POST['email']; //variável local recebe valor de variável global
	$_SESSION['email'] = $email; //variável global recebe valor de variável local
	$senha = $_POST['senha'];
	$_SESSION['senha'] = $senha;

	$sqlCoordenador = mysqli_query($mysqli, "SELECT idCoordenador, email, senha FROM coordenador WHERE email = '$email' AND senha = '$senha'");

    $linhaCoordenador = mysqli_num_rows($sqlCoordenador); //conta número de linhas do resultado da query
	if ($linhaCoordenador == 1) {
		$array = mysqli_fetch_array($sqlCoordenador); //destrincha o resultado da query num array
		$_SESSION['idCoordenador'] = $array['idCoordenador'];
		header("Location: coordenador/coordenador.php"); //encaminha para a página de coordenador
		mysqli_free_result($sqlCoordenador); //limpar sqlCoordenador
		mysqli_close($mysqli); //fechar conexão
	} else {
		$sqlAluno = mysqli_query($mysqli, "SELECT ra FROM aluno WHERE email = '$email' AND senha = '$senha'");
		$linhaAluno = mysqli_num_rows($sqlAluno);
		if ($linhaAluno == 1) {
			$array = mysqli_fetch_array($sqlAluno); //destrincha o resultado da query num array
			$_SESSION['ra'] = $array['ra'];
			mysqli_free_result($sqlAluno); //limpar sqlAluno
			mysqli_close($mysqli);
			header("Location: aluno/aluno.php");
		} else {
			mysqli_free_result($sqlAluno);
			mysqli_close($mysqli);
			header("Location: ../index.php");
		}
	}
?>