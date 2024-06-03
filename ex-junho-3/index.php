<?php 
include 'header.php';
?>



<div class="row">
    <div class="col">

        <form action="salvar.php" method="POST">

            <div class="mb-3">
                <label class="form-label" for="cep">CEP</label>
                <input type="text" class="form-control" name="cep" id="cep" placeholder="CEP" onblur="buscaCep()">
            </div>

            <div class="mb-3">
                <label class="form-label" for="logradouro">Logradouro</label>
                <input type="text" class="form-control" name="logradouro" id="logradouro" placeholder="Logradouro">
            </div>

            <div class="mb-3">
                <label class="form-label" for="numero">Número</label>
                <input type="text" class="form-control" name="numero" id="numero" placeholder="numero">
            </div>

            <div class="mb-3">
                <label class="form-label" for="complemento">Complemento</label>
                <input type="text" class="form-control" name="complemento" id="complemento" placeholder="Complemento">
            </div>

            <div class="mb-3">
                <label class="form-label" for="bairro">Bairro</label>
                <input type="text" class="form-control" name="bairro" id="bairro" placeholder="Bairro">
            </div>

            <div class="mb-3">
                <label class="form-label" for="localidade">Localidade</label>
                <input type="text" class="form-control" name="localidade" id="localidade" placeholder="Localidade">
            </div>

            <div class="mb-3">
                <label class="form-label" for="uf">UF</label>
                <input type="text" class="form-control" name="uf" id="uf" placeholder="UF">
            </div>

            <div class="mb-3">
                <label class="form-label" for="ibge">IBGE</label>
                <input type="text" class="form-control" name="ibge" id="ibge" placeholder="IBGE">
            </div>

            <div class="mb-3">
                <label class="form-label" for="ddd">DDD</label>
                <input type="text" class="form-control" name="ddd" id="ddd" placeholder="DDD">
            </div>

            <input type="submit" value="Enviar" class="btn btn-primary float-end">

        </form>

    </div>
</div>
    


<?php 
include 'footer.php';
?>