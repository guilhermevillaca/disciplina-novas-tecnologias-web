<?php

$servidor = "localhost";
$banco = "tema4";
$usuario = "root";
$senha = "";
$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);
if (!$conexao) {
    die("A conexão falhou: " . mysqli_connect_error());
}
echo "Conectado com sucesso!";

$id = $_GET['id'];
$nome = $_POST['nome'];
$data_nascimento = $_POST['data_nascimento'];
$cpf = $_POST['cpf'];

$sql = "UPDATE pessoa_fisica SET 
    nome = '$nome', 
    data_nascimento = '$data_nascimento', 
    cpf = '$cpf' 
    WHERE id = " . $id;
if (mysqli_query($conexao, $sql)) {
      echo "Dados alterados com sucesso";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conexao);
}

mysqli_close($conexao);
