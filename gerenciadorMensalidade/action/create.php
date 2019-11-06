<?php
//Conexão
require_once 'db_connect.php';

if(isset($_POST['cadastrar'])):
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $telefone = mysqli_escape_string($connect, $_POST['telefone']);
    $cpf = mysqli_escape_string($connect, $_POST['cpf']);
    $endereco = mysqli_escape_string($connect, $_POST['endereco']);
    $numero = mysqli_escape_string($connect, $_POST['numero']);
    $bairro = mysqli_escape_string($connect, $_POST['bairro']);
    $cep = mysqli_escape_string($connect, $_POST['cep']);
    $email = mysqli_escape_string($connect, $_POST['email']);

    $sql = "INSERT INTO funcionario (nome, telefone, cpf, endereco, numero, bairro, cep, email) 
    VALUES ('$nome','$telefone','$cpf','$endereco', '$numero','$bairro','$cep','$email')";

    if(mysqli_query($connect, $sql)):
        header('Location: ../funcionario/sucesso.php');
    else:
        header('Location: ../funcionario/erro.php');
    endif;
endif;