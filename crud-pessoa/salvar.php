<?php

include 'header.php';

$id = isset($_GET['id']) ? $_GET['id'] : '';

$nome = $_GET['nome'];
$cpf = $_GET['cpf'];
$telefone = $_GET['telefone'];
$endereco = $_GET['endereco'];
$sexo = $_GET['sexo'];

if(!$id){
    $sql = "insert into pessoa (nome, cpf, telefone, endereco, sexo) values('$nome', '$cpf', '$telefone', '$endereco', '$sexo')";
}else{
    //fazer update
    $sql = "update pessoa set nome = '$nome', cpf = '$cpf', telefone = '$telefone', endereco = '$endereco', sexo = '$sexo' where id = '$id' ";
}



?>



<div class="row">

    <div class="col">

        <?php 
        
            if(mysqli_query($conexao, $sql)){
                if(!$id){
                    echo "<p>Novos dados inseridos com sucesso</p>";
                }else{
                    echo "<p>Dados atualizados com sucesso</p>";
                }
            }
        
        ?>

    </div>
</div>



<?php

include 'footer.php';

?>
