<?php 
include 'header.php';
?>



<div class="row">
    <div class="col">

        <form action="salvar.php">

            <div class="mb-3">
                <label class="form-label" for="nome">Nome</label>
                <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome">
            </div>

            <div class="mb-3">
                <label class="form-label" for="cpf">CPF</label>
                <input type="text" class="form-control" name="cpf" id="cpf" placeholder="CPF">
            </div>

            <div class="mb-3">
                <label class="form-label" for="telefone">Telefone</label>
                <input type="text" class="form-control" name="telefone" id="telefone" placeholder="Telefone">
            </div>

            <div class="mb-3">
                <label class="form-label" for="endereco">Endereço</label>
                <input type="text" class="form-control" name="endereco" id="endereco" placeholder="Endereço">
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="sexo" id="m" value="m">
                <label class="form-check-label" for="m">Masculino</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sexo" id="f" value="f">
                <label class="form-check-label" for="f">Feminino</label>
            </div>

            <input type="submit" value="Enviar" class="btn btn-primary float-end">

        </form>

    </div>
</div>
    


<?php 
include 'footer.php';
?>