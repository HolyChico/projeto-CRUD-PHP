<h1> Listar Vendas </h1>

<?php
    $sql = "SELECT * FROM vendas";

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
            print"<td>".$row->id_vendas."</td>";
            print"<td>".$row->nome_vendas."</td>";
            print"<td>".$row->email_vendas."</td>";
            print"<td>".$row->telefone_vendas."</td>";
            print"<tr>";
        }
        print"</table>";
    }



?>