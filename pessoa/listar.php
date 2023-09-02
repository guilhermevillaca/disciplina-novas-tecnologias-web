<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Document</title>
</head>
<body>
    
<?php
    $servidor = "localhost";
    $banco = "tema4";
    $usuario = "root";
    $senha = "";
    $conexao = mysqli_connect($servidor, $usuario, $senha, $banco);
    if (!$conexao) {
        die("A conexão falhou: " . mysqli_connect_error());
    } 
        $sql = "SELECT id, nome, data_nascimento, cpf FROM pessoa_fisica";
        $result = $conexao->query($sql);
?>

<table>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Data Nascimento</th>
        <th>CPF</th>
        <th>Ações</th>
    </tr>       
<?php
    
    // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["nome"] . "</d>";
            echo "<td>" . $row["data_nascimento"] . "</td>";
            echo "<td>" . $row["cpf"] . "</td>";
            echo '<td>
                <a href="editar.php?id='.$row["id"].'">Editar</a>
                <a href="excluir.php?id='.$row["id"].'">Excluir</a>
                </td>';
            echo "</tr>";
        }
   

?>    
    
</table>

<?php    
    $conexao->close();
?>

</body>
</html>