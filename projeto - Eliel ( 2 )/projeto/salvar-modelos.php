<?php
    switch($_REQUEST["acao"]) {
        case 'cadastrar':
            $nome = $_POST['nome_modelos'];
            $email = $_POST['email_modelos'];
            $telefone = $_POST['telefone_modelos'];

        $sql = "INSERT INTO modelo (nome_modelo, email_modelo, telefone_modelo)
                VALUES('{$nome}', '{$email}', '{$telefone}') ";
            
        $res = $conn->query($sql);

        if($res == true){
            print "<cript> alert('cadastrado com sucesso') </script>";
            print "<script> location.href='?page=listar-modelos'; </script>";
        }else{
            print "<cript> alert('NÃO cadastrado') </script>";
            print "<script> location.href='?page=listar-modelos'; </script>";
        }
        break;

        case 'editar':
            //code
        
        case 'excluir':
            //code

    }



?>