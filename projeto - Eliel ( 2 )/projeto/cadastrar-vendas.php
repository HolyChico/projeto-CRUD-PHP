<h1> Cadastrar Vendas </h1>
<form action="?page=salvar-vendas" method="POST">
    <input type="hidden" name="acao" value="cadastrar">

    <div class="mb-3">
        <label> Número da Venda
            <input type="text" name="nome_vendas" class="form-control" required>
        </label>

    </div>

    <div class="mb-3">
        <label> E-mail
            <input type="text" name="email_vendas" class="form-control" required>
        </label>
    </div>

    <div class="mb-3">
        <label> Telefone
            <input type="number" name="telefone_vendas" class="form-control" required>
        </label>
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary"> Enviar </button>
    </div>

</form>