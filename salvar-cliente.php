<?php
    switch ($_REQUEST["acao"]){
        case "cadastrar":
            $nome_empresa = $_POST["nome_empresa"];
            $data_fundacao_empresa = $_POST["data_fundacao_empresa"];
            $Telefone_empresa = $_POST["Telefone_empresa"];
            $Nome_contato = $_POST["Nome_contato"];
            $data_aniversario_contato = $_POST["data_aniversario_contato"];
            $email = $_POST["email"];
            $Telefone_Contador = $_POST["Telefone_Contador"];

            $sql = "INSERT INTO cliente (nome_empresa,data_fundacao_empresa, Telefone_empresa,Nome_contato, data_aniversario_contato, email, Telefone_Contador ) VALUES ('{$nome_empresa}','{$data_fundacao_empresa}','{$Telefone_empresa}','{$Nome_contato}','{$data_aniversario_contato}','{$email}','{$Telefone_Contador}')";

            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Cadastrado com sucesso!');</script>";
                print "<script>location.href='?page=listar';</script>";   
            }else{
                print "<script>alert('Não foi possível cadastrar.');</script>";
                print "<script>location.href='?page=listar';</script>";   
            }
        break;
        case "editar":
            $nome = $_POST["nome"];
        break;
        case "excluir":
            $nome = $_POST["nome"];
        break;
        
    }

?>