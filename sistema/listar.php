<?php include 'header.php'; ?>
    
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
<?php   while($row = $result->fetch_assoc()) { ?>

            <tr>
                <td><?=$row["id"]?></td>
                <td><?=$row["nome"]?></td>
                <td><?=$row["data_nascimento"]?></td>
                <td><?=$row["cpf"]?></td>
                <td>
                    <a href="editar.php?id=<?=$row["id"]?>">Editar</a>
                    <a href="excluir.php?id=<?=$row["id"]?>">Excluir</a>    
                </td>
            </tr>
            
<?php   } ?>    
    
</table>

<?php    
    $conexao->close();
?>


<?php include 'footer.php'; ?>