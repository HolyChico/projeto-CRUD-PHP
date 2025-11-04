<?php
    switch($_REQUEST["acao"]) {
        case 'cadastrar':
            $nome = $_POST['nome_marcas'];
            $email = $_POST['email_marcas'];
            $telefone = $_POST['telefone_marcas'];

        $sql = "INSERT INTO marca (nome_marca, email_marca, telefone_marca)
                VALUES('{$nome}', '{$email}', '{$telefone}') ";
            
        $res = $conn->query($sql);

        if($res == true){
            print "<cript> alert('cadastrado com sucesso') </script>";
            print "<script> location.href='?page+listar-marcas'; </script>";
        }else{
            print "<cript> alert('NÃO cadastrado') </script>";
            print "<script> location.href='?page+listar-marcas'; </script>";
        }
        break;

        case 'editar':
            //code
        
        case 'excluir':
            //code

    }



?>