<h1> Cadastrar Modelos </h1>
<form action="?page=salvar-modelos" method="POST">
    <input type="hidden" name="acao" value="cadastrar">

    <div class="mb-3">
        <label> Nome do Modelo
            <input type="text" name="nome_modelos" class="form-control" required>
        </label>

    </div>

    <div class="mb-3">
        <label> E-mail
            <input type="text" name="email_modelos" class="form-control" required>
        </label>
    </div>

    <div class="mb-3">
        <label> Telefone
            <input type="number" name="telefone_modelos" class="form-control" required>
        </label>
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary"> Enviar </button>
    </div>

</form>