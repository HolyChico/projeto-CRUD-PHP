<h1> Listar Marcas </h1>

<?php
    $sql = "SELECT * FROM marcas";

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
            print"<td>".$row->id_marcas."</td>";
            print"<td>".$row->nome_marcas."</td>";
            print"<td>".$row->email_marcas."</td>";
            print"<td>".$row->telefone_marcas."</td>";
            print"<tr>";
        }
        print"</table>";
    }



?>