<h1> Cadastrar Clientes </h1>
<form action="?page=salvar-clientes" method="POST">
    <input type="hidden" name="acao" value="cadastrar">

    <div class="mb-3">
        <label> Nome do Cliente
            <input type="text" name="nome_clientes" class="form-control" required>
        </label>

    </div>

    <div class="mb-3">
        <label> E-mail
            <input type="text" name="email_clientes" class="form-control" required>
        </label>
    </div>

    <div class="mb-3">
        <label> Telefone
            <input type="number" name="telefone_clientes" class="form-control" required>
        </label>
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary"> Enviar </button>
    </div>

</form>