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
            $nome_empresa = $_POST["nome_empresa"];
            $data_fundacao_empresa = $_POST["data_fundacao_empresa"];
            $Telefone_empresa = $_POST["Telefone_empresa"];
            $Nome_contato = $_POST["Nome_contato"];
            $data_aniversario_contato = $_POST["data_aniversario_contato"];
            $email = $_POST["email"];
            $Telefone_Contador = $_POST["Telefone_Contador"];

            $sql = "UPDATE cliente SET 
                        nome_empresa='{$nome_empresa}',
                        data_fundacao_empresa='{$data_fundacao_empresa}',
                        Telefone_empresa='{$Telefone_empresa}',
                        Nome_contato='{$Nome_contato}',
                        data_aniversario_contato='{$data_aniversario_contato}',
                        email='{$email}',
                        Telefone_Contador='{$Telefone_Contador}'
                    WHERE
                        id=".$_REQUEST["id"];

            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Editado com sucesso!');</script>";
                print "<script>location.href='?page=listar';</script>";   
            }else{
                print "<script>alert('Não foi possível editar.');</script>";
                print "<script>location.href='?page=listar';</script>";   
            }

            break;
        case "excluir":
            $sql = "DELETE FROM cliente WHERE id=".$_REQUEST["id"];
            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Excluido com sucesso!');</script>";
                print "<script>location.href='?page=listar';</script>";   
            }else{
                print "<script>alert('Não foi possível excluir.');</script>";
                print "<script>location.href='?page=listar';</script>";   
            }

        break;
        
    }

?>