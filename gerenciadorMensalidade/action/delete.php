<?php
// Sessão
session_start();
// Conexão
require_once 'db_connect.php';

if(isset($_POST['excluir'])):	
	$id = $_POST['id']; 
	$sql = "DELETE FROM funcionario WHERE id = $id";
	if(mysqli_query($connect, $sql)):
        header('Location: ../funcionario/sucessoExcluir.php');
    else:
        header('Location: ../funcionario/erroExcluir.php');
    endif;
endif;