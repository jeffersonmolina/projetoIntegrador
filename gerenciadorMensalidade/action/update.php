<?php
// Sessão
session_start();
// Conexão
require_once 'db_connect.php';

if(isset($_POST['editar'])):
	$nome = mysqli_escape_string($connect, $_POST['nome']);
    $telefone = mysqli_escape_string($connect, $_POST['telefone']);
    $cpf = mysqli_escape_string($connect, $_POST['cpf']);
    $endereco = mysqli_escape_string($connect, $_POST['endereco']);
    $numero = mysqli_escape_string($connect, $_POST['numero']);
    $bairro = mysqli_escape_string($connect, $_POST['bairro']);
    $cep = mysqli_escape_string($connect, $_POST['cep']);
    $email = mysqli_escape_string($connect, $_POST['email']);

	$id = mysqli_escape_string($connect, $_POST['id']);

	$sql = "UPDATE funcionario SET nome = '$nome', telefone = '$telefone', cpf = '$cpf', endereco = '$endereco' , numero = '$numero',
	 bairro = '$bairro', cep = '$cep', email = '$email' WHERE id = '$id'";

if(mysqli_query($connect, $sql)):
	header('Location: ../funcionario/sucessoEditar.php');
else:
	header('Location: ../funcionario/erroEditar.php');
endif;
endif;