<?php
    switch($_REQUEST["acao"]) {
        case 'cadastrar':
            $nome = $_POST['nome_clientes'];
            $email = $_POST['email_clientes'];
            $telefone = $_POST['telefone_clientes'];
        
        // id_cliente	nome_cliente	cpf_cliente	email_cliente	telefone_cliente	endereco_cliente	dt_nasc_cliente	

        $sql = "INSERT INTO cliente (nome_cliente, email_cliente, telefone_cliente)
                VALUES('{$nome}', '{$email}', '{$telefone}') ";
            
        $res = $conn->query($sql);

        if($res == true){
            print "<cript> alert('cadastrado com sucesso') </script>";
            print "<script> location.href='?page+listar-clientes'; </script>";
        }else{
            print "<cript> alert('NÃO cadastrado') </script>";
            print "<script> location.href='?page+listar-clientes'; </script>";
        }
        break;

        case 'editar':
            //code
        
        case 'excluir':
            //code

    }



?>