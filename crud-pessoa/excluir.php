<?php

include 'header.php';

$id = isset($_GET['id']) ? $_GET['id'] : '';


$sql = "delete from pessoa where id ='$id'";



?>



<div class="row">

    <div class="col">

        <?php 
        
            if(mysqli_query($conexao, $sql)){                
                echo "<p>Dados excluidos com sucesso</p>";                
            }
        
        ?>

    </div>
</div>



<?php

include 'footer.php';

?>
