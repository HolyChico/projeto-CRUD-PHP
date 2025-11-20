<?php
    switch($_REQUEST["acao"]) {
        case 'cadastrar':
            $nome = $_POST['nome_vendas'];
            $email = $_POST['email_vendas'];
            $telefone = $_POST['telefone_vendas'];

        $sql = "INSERT INTO venda (nome_venda, email_venda, telefone_venda)
                VALUES('{$nome}', '{$email}', '{$telefone}') ";
            
        $res = $conn->query($sql);

        if($res == true){
            print "<cript> alert('cadastrado com sucesso') </script>";
            print "<script> location.href='?page=listar-vendas'; </script>";
        }else{
            print "<cript> alert('NÃO cadastrado') </script>";
            print "<script> location.href='?page=listar-vendas'; </script>";
        }
        break;

        case 'editar':
            //code
        
        case 'excluir':
            //code

    }



?>