<h1> Editar Modelos </h1>

<?php
    $sql = "SELECT * FROM modelo WHERE id_modelo = ".$_REQUEST ['id_modelo'];

    $res = $conn -> query($sql);

    $row = $res -> fetch_object();
?> 

<form action="?page=salvar-modelo" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_modelo" value="<?php print $row -> id_modelo ?>" >

    <div class="mb-3">
        <label> Nome
            <input type="text"  name="nome_modelo" class="form-control" value="<?php print $row -> nome_modelo; ?>">
        </label>
    </div>

    <div class="mb-3">
        <label>E-mail
            <input type="email" name="email_modelo" class="form-control" value="<?php print $row -> email_modelo; ?> "> 
        </label>
    </div>

    <div class="mb-3"> 
        <label> Telefone
            <input type="number" name="telefone_modelo" class="form-control" value="<?php print $row -> telefone_modelo; ?>">
        </label>
    </div>

    <div>
        <button class="submit" class="btn btn-primary"> Enviar </button>
    </div> 

</form>