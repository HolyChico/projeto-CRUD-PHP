<h1> Listar Funcionário </h1>

<?php
    $sql = "SELECT * FROM funcionario";

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
            print"<td>".$row->id_funcionario."</td>";
            print"<td>".$row->nome_funcionario."</td>";
            print"<td>".$row->email_funcionario."</td>";
            print"<td>".$row->telefone_funcionario."</td>";
            print"<tr>";
        }
        print"</table>";
    }



?>