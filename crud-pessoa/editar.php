<?php 
include 'header.php';
$id = $_GET['id'];
$sql = "select * from pessoa where id='$id'";
$result = $conexao->query($sql);
$pessoa = $result->fetch_assoc();

?>



<div class="row">
    <div class="col">

        <form action="salvar.php">

            <input type="hidden" name="id" value="<?=$pessoa['id']?>">

            <div class="mb-3">
                <label class="form-label" for="nome">Nome</label>
                <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" value="<?=$pessoa['nome']?>">
            </div>

            <div class="mb-3">
                <label class="form-label" for="cpf">CPF</label>
                <input type="text" class="form-control" name="cpf" id="cpf" placeholder="CPF" value="<?=$pessoa['cpf']?>">
            </div>

            <div class="mb-3">
                <label class="form-label" for="telefone">Telefone</label>
                <input type="text" class="form-control" name="telefone" id="telefone" placeholder="Telefone" value="<?=$pessoa['telefone']?>">
            </div>

            <div class="mb-3">
                <label class="form-label" for="endereco">Endereço</label>
                <input type="text" class="form-control" name="endereco" id="endereco" placeholder="Endereço" value="<?=$pessoa['endereco']?>">
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="sexo" id="m" value="m" <?= $pessoa['sexo'] == 'm' ? 'checked' : '' ?>>
                <label class="form-check-label" for="m">Masculino</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sexo" id="f" value="f" <?= $pessoa['sexo'] == 'f' ? 'checked' : '' ?>>
                <label class="form-check-label" for="f">Feminino</label>
            </div>

            <input type="submit" value="Enviar" class="btn btn-primary float-end">

        </form>

    </div>
</div>
    


<?php 
include 'footer.php';
?>