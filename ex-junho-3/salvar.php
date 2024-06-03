<?php

include 'header.php';

$cep = $_POST['cep'];
$logradouro = $_POST['logradouro'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];
$bairro = $_POST['bairro'];
$localidade = $_POST['localidade'];
$uf = $_POST['uf'];
$ibge = $_POST['ibge'];
$ddd = $_POST['ddd'];


$sql = "insert into cep (cep, logradouro, numero, complemento, bairro, localidade, uf, ibge, ddd) 
values('$cep', '$logradouro', '$numero', '$complemento', '$bairro', '$localidade', '$uf', '$ibge', '$ddd')";

?>

<div class="row">
    <div class="col">
        <?php         
            if(mysqli_query($conexao, $sql)){               
                echo "<p>Novos dados inseridos com sucesso</p>";
            }        
        ?>
    </div>
</div>

<?php

include 'footer.php';

?>
