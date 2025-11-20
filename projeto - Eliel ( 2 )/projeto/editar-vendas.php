<h1> Editar Vendas </h1>

<?php
    $sql = "SELECT * FROM venda WHERE id_venda = ".$_REQUEST ['id_venda'];

    $res = $conn -> query($sql);

    $row = $res -> fetch_object();
?> 

<form action="?page=salvar-venda" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_venda" value="<?php print $row -> id_venda ?>" >

    <div class="mb-3">
        <label> Nome
            <input type="text"  name="nome_venda" class="form-control" value="<?php print $row -> nome_venda; ?>">
        </label>
    </div>

    <div class="mb-3">
        <label>E-mail
            <input type="email" name="email_venda" class="form-control" value="<?php print $row -> email_venda; ?> "> 
        </label>
    </div>

    <div class="mb-3"> 
        <label> Telefone
            <input type="number" name="telefone_venda" class="form-control" value="<?php print $row -> telefone_venda; ?>">
        </label>
    </div>

    <div>
        <button class="submit" class="btn btn-primary"> Enviar </button>
    </div> 

</form>