<?php include 'header.php'; ?>    

    <form action="pessoa.php" method="post">
        <input type="text" name="nome" id="nome" placeholder="Nome"> <br>
        <input type="date" name="data_nascimento" id="data_nascimento" 
                placeholder="Data Nascimento"> <br>
        <input type="text" name="cpf" id="cpf" placeholder="CPF"> <br>
        <input type="submit" value="Enviar">
    </form>


<?php include 'footer.php'; ?>