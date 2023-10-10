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
            $sql = "SELECT id, nome, data_nascimento, cpf FROM pessoa_fisica WHERE id = " . $_GET['id'];            
            $result = $conexao->query($sql);            
            $pessoa = $result->fetch_assoc();
    ?>
    <form action="salvar_edicao.php?id=<?=$pessoa['id']?>" method="post">
        <input type="text" name="nome" id="nome" placeholder="Nome" value="<?=$pessoa['nome']?>"> <br>
        <input type="date" name="data_nascimento" id="data_nascimento" 
                placeholder="Data Nascimento" value="<?=$pessoa['data_nascimento']?>"> <br>
        <input type="text" name="cpf" id="cpf" placeholder="CPF" value="<?=$pessoa['cpf']?>"> <br>
        <input type="submit" value="Enviar">
    </form>

    


<?php include 'footer.php'; ?>