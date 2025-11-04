<h1> Listar Clientes </h1>

<?php
    $sql = "SELECT * FROM clientes";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    print"<p> Encontrou <b>$qtd</b> resultados(s). </p>";

    if($res == true){
        print"<table class='table table-bordered table-striped table-hover'>";
        print"<tr>";
        print"<th>#</th>";
        print"<th>Nome</th>";
        print"<th>Email</th>";
        print"<th>Telefone</th>";
        print"</tr>";

        while($row = $res->fetch_object() ){
            print"<tr>";
            print"<td>".$row->id_clientes."</td>";
            print"<td>".$row->nome_clientes."</td>";
            print"<td>".$row->email_clientes."</td>";
            print"<td>".$row->telefone_clientes."</td>";
            print"<tr>";
        }
        print"</table>";
    }



?>