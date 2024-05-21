<?php 
include 'header.php';

$sql = "SELECT * FROM pessoa";
$result = $conexao->query($sql);


?>


<div class="row">
    <div class="col">


        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Sexo</th>
                <th>CPF</th>
                <th>Telefone</th>
                <th>Endereço</th>
                <th>Ações</th>
            </tr>
            </thead>
            <tbody>
            <?php while($row = $result->fetch_assoc()){ ?>
                <tr>                
                    <td><?=$row['id']?></td>
                    <td><?=$row['nome']?></td>
                    <td><?=$row['sexo'] == 'm' ? 'Masculino' : 'Feminino' ?></td>
                    <td><?=$row['cpf']?></td>
                    <td><?=$row['telefone']?></td>
                    <td><?=$row['endereco']?></td>
                    <td>
                        <a class="btn btn-primary" href="editar.php?id=<?=$row['id']?>">Editar</a>
                        <a class="btn btn-danger" href="excluir.php?id=<?=$row['id']?>">Excluir</a>
                    </td>
                </tr>
            <?php } ?>
            
            
            </tbody>
        </table>

    </div>
</div>
    


<?php 
include 'footer.php';
?>