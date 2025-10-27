<?php
    switch($_REQUEST["acao"]) {
        case 'cadastrar':
            $nome = $_POST['nome_funcionario'];
            $email = $_POST['email_funcionario'];
            $telefone = $_POST['telefone_funcionario'];

        $sql = "INSERT INTO funcionario (nome_funcionario, email_funcionario, telefone_funcionario)
                VALUES('{$nome}', '{$email}', '{$telefone}') ";
            
        $res = $conn->query($sql);

        if($res == true){
            print "<cript> alert('cadastrado com sucesso') </script>";
            print "<script> location.href='?page+listar-funcionario'; </script>";
        }else{
            print "<cript> alert('NÃO cadastrado') </script>";
            print "<script> location.href='?page+listar-funcionario'; </script>";
        }
        break;

        case 'editar':
            //code
        
        case 'excluir':
            //code

    }



?>