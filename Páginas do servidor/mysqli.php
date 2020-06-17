<?php
// Conecta ao banco de dados
$mysqli = mysqli_connect('localhost:3306', 'root', 'mikamika', 'matricula');
// Verifica se ocorreu algum erro
if (mysqli_connect_errno()) {
    die('Não foi possível conectar-se ao banco de dados: ' . mysqli_connect_error());
    exit();
}