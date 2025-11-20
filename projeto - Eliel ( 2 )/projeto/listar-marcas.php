<h1> Listar Marcas </h1>

<?php
    $sql = "SELECT * FROM marca";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    print"<p> Encontrou <b>$qtd</b> resultados(s). </p>";

    if($res == true){
        print"<table class='table table-bordered table-striped table-hover'>";
        print"<tr>";
        print"<th>#</th>";
        print"<th>Nome</th>";
        print"<th>E-mail</th>";
        print"<th>Telefone</th>";
        print"<th>Ações</th>";
        print"</tr>";

        while($row = $res->fetch_object() ){
            print"<tr>";
            print"<td>".$row->id_marca."</td>";
            print"<td>".$row->nome_marca."</td>";
            print"<td>".$row->email_marca."</td>";
            print"<td>".$row->telefone_marca."</td>";
            print"<td>
                    <button class='btn btn-success' onclick=\"location.href='?page=editar-marca&id_marca={$row->id_marca}'; \"> Editar </button>

                    <button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')) {location.href='?page=salvar-marca&acao=excluir&id_marca={$row->id_marca}'; }\"> Excluir </button>

                 </td>";
            print"<tr>";
        }
        print"</table>";
    } else{
        print"<p> Não encontrou resultado </p>";
    }
?>