<?php
// Sessão
session_start();
// Conexão
require_once 'php_action/db_connect.php';
require_once 'includes/message.php';
// Clear
function clear($input) {
	global $connect;
	// sql
	$var = mysqli_escape_string($connect, $input);
	// xss
	$var = htmlspecialchars($var);
	return $var;
}

if(isset($_POST['submit'])):
	$nome = clear($_POST['nome']);
	$sobrenome = clear($_POST['sobrenome']);
	$fone = clear($_POST['fone']);
	$dataani = clear($_POST['dataani']);
    $email = clear($_POST['email']);

	$sql = "INSERT INTO tbcontato (nome, sobrenome, fone, dataani, email) VALUES ('$nome', '$sobrenome', '$fone', '$dataani', '$email')";

	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Cadastrado com sucesso!";
		header('Location: ../lista.php');
	else:
		$_SESSION['mensagem'] = "Erro ao cadastrar";
		header('Location: ../cadastro.php');
	endif;
endif;