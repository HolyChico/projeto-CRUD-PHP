<h1> Cadastrar Marcas </h1>
<form action="?page=salvar-marcas" method="POST">
    <input type="hidden" name="acao" value="cadastrar">

    <div class="mb-3">
        <label> Nome da Marca
            <input type="text" name="nome_marcas" class="form-control" required>
        </label>

    </div>

    <div class="mb-3">
        <label> E-mail
            <input type="text" name="email_marcas" class="form-control" required>
        </label>
    </div>

    <div class="mb-3">
        <label> Telefone
            <input type="number" name="telefone_marcas" class="form-control" required>
        </label>
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary"> Enviar </button>
    </div>

</form>