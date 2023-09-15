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


$nome = $_POST['nome'];
$data_nascimento = $_POST['data_nascimento'];
$cpf = $_POST['cpf'];

$sql = "INSERT INTO pessoa_fisica (nome, data_nascimento, cpf) VALUES ('$nome', '$data_nascimento', '$cpf')";
if (mysqli_query($conexao, $sql)) {
      echo "Novos dados inseridos com sucesso";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conexao);
}

mysqli_close($conexao);
