<h1> Editar Vendas </h1>

<?php
    // CORREÇÃO 1: Evita o Erro Fatal, definindo $id_venda como 0 se não estiver na URL
    $id_venda = (int) @$_REQUEST['id_venda']; 

    $sql = "SELECT * FROM venda WHERE id_venda = " . $id_venda;

    $res = $conn -> query($sql);

    // Proteção: Inicializa $row
    if ($res && $res->num_rows > 0) {
        $row = $res -> fetch_object();
    } else {
        $row = (object) []; 
    }
?> 

<form action="?page=salvar-vendas" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_venda" value="<?php print $row->id_venda ?? ''; ?>" >

    <div class="mb-3">
        <label> Data
            <input type="date"  name="data_venda" class="form-control" value="<?php print $row->data_venda ?? ''; ?>">
        </label>
    </div>

    <div class="mb-3">
        <label>Valor 
            <input type="number" name="valor_venda" class="form-control" value="<?php print $row->valor_venda ?? ''; ?>"> 
        </label>
    </div>

    <div class="mb-3"> 
        <label> Cliente
            <select name="cliente_id_cliente" class="form-control" required>
                <option> Escolha </option>
                <?php
                    $sql_1 = "SELECT * FROM cliente";
                    $res_1 = $conn -> query($sql_1);
                    $qtd_1 = $res_1 -> num_rows;
                    if ($qtd_1 > 0){
                        while($row_1 = $res_1 -> fetch_object()){
                            // CORREÇÃO 2: Lógica de seleção correta (FK vs PK)
                            $selected = (isset($row->cliente_id_cliente) && $row->cliente_id_cliente == $row_1->id_cliente) ? 'selected' : '';
                            print "<option value='{$row_1->id_cliente}' {$selected}> {$row_1->nome_cliente} </option>";
                        }
                    } else {
                        print "<option> Não há clientes registradas </option>";
                    }
                ?>
            </select>
        </label>
    </div>

    <div class="mb-3"> 
        <label> Funcionário
            <select name="funcionario_id_funcionario" class="form-control" required>
                <option> Escolha </option>
                <?php
                    $sql_1 = "SELECT * FROM funcionario";
                    $res_1 = $conn -> query($sql_1);
                    $qtd_1 = $res_1 -> num_rows;
                    if ($qtd_1 > 0){
                        while($row_1 = $res_1 -> fetch_object()){
                            // CORREÇÃO 2: Lógica de seleção correta (FK vs PK)
                            $selected = (isset($row->funcionario_id_funcionario) && $row->funcionario_id_funcionario == $row_1->id_funcionario) ? 'selected' : '';
                            print "<option value='{$row_1->id_funcionario}' {$selected}> {$row_1->nome_funcionario} </option>";
                        }
                    } else {
                        print "<option> Não há funcionários registradas </option>";
                    }
                ?>
            </select>
        </label>
    </div>

    <div class="mb-3"> 
        <label> Veiculo
            <select name="modelo_id_modelo" class="form-control" required>
                <option> Escolha </option>
                <?php
                    $sql_1 = "SELECT * FROM modelo";
                    $res_1 = $conn -> query($sql_1);
                    $qtd_1 = $res_1 -> num_rows;
                    if ($qtd_1 > 0){
                        while($row_1 = $res_1 -> fetch_object()){
                            // CORREÇÃO 2: Lógica de seleção correta (FK vs PK)
                            $selected = (isset($row->modelo_id_modelo) && $row->modelo_id_modelo == $row_1->id_modelo) ? 'selected' : '';
                            print "<option value='{$row_1->id_modelo}' {$selected}> {$row_1->nome_modelo} </option>";
                        }
                    } else {
                        print "<option> Não há modelos registradas </option>";
                    }
                ?>
            </select>
        </label>
    </div>

    <div>
        <button type="submit" class="btn btn-primary"> Enviar </button>
    </div> 

</form>