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

$sql = "DELETE FROM pessoa_fisica WHERE id = " . $_GET['id'];
if (mysqli_query($conexao, $sql)) {
      echo "Dados deletados com sucesso";
      echo '<a href="listar.php">Listar</a>';
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conexao);
}

mysqli_close($conexao);

