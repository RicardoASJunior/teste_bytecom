<?php
    date_default_timezone_set('America/Sao_Paulo');

    switch ($_REQUEST["acao"]){
        case "cadastrar_cliente":
            if(isset($_FILES['Logo'])){
                $Logo = $_FILES['Logo'];
            
                if($Logo['error']){
                    die("Falha ao enviar Imagem");
                }
            
                if($Logo['size'] > 5242880){
                    die("Arquivo muito grande! Máximo 5MB");
                }
                $pasta = "arquivo/";
                $nomeDoArquivo = $Logo['name'];
                $novoNomeDoArquivo = uniqid();
                $extensao = strtolower(pathinfo($nomeDoArquivo, PATHINFO_EXTENSION));
                if($extensao != "jpg" && $extensao != "png"){
                    die("O tipo de arquivo não é compatível");
                }
                $path = $pasta . $novoNomeDoArquivo . "." . $extensao;
                $deuCerto = move_uploaded_file($Logo["tmp_name"], $path );
            }

            $id_contador = $_SESSION['id'];
            $nome_empresa = $_POST["nome_empresa"];
            $data_fundacao_empresa = $_POST["data_fundacao_empresa"];
            $Telefone_empresa = $_POST["Telefone_empresa"];
            $Nome_contato = $_POST["Nome_contato"];
            $data_aniversario_contato = $_POST["data_aniversario_contato"];
            $email = $_POST["email"];
            $senha = $_SESSION['senha'];
            $hashSenha = password_hash($senha, PASSWORD_DEFAULT);
            $Telefone_Contador = $_POST["Telefone_Contador"];
            $data_cadastro = date('y/m/d');

            $sql = "SELECT * FROM cliente WHERE email = ? OR nome_empresa = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ss", $email, $nome_empresa);
            $stmt->execute();

            $res = $stmt->get_result();

            if ($res->num_rows > 0) {
                print "<script>alert('Usuário já está cadastrado!.');</script>";
                print "<script>location.href='dashboard.php?page_cliente=novo_cliente';</script>";  
                
            } else {

                    $sql = "INSERT INTO cliente (id_contador,
                                                nome_empresa,
                                                data_fundacao_empresa, 
                                                Telefone_empresa,
                                                Nome_contato, 
                                                data_aniversario_contato, 
                                                email, 
                                                senha,
                                                Telefone_Contador,data_cadastro,
                                                Logo ) 
                                                VALUES ('{$id_contador}',
                                                '{$nome_empresa}',
                                                '{$data_fundacao_empresa}',
                                                '{$Telefone_empresa}',
                                                '{$Nome_contato}',
                                                '{$data_aniversario_contato}',
                                                '{$email}',
                                                '{$hashSenha}',
                                                '{$Telefone_Contador}',
                                                '{$data_cadastro}',
                                                '{$path}')";

                    $res = $conn->query($sql);

                    if($res==true){
                        print "<script>alert('Cadastrado com sucesso!');</script>";
                        print "<script>location.href='dashboard.php?page_cliente=listar_cliente';</script>";
                    }else{
                        print "<script>alert('Não foi possível cadastrar.');</script>";
                        print "<script>location.href='dashbord.php';</script>";       
                    }
                break;
            }
        case "editar_cliente":
            if(isset($_FILES['Logo'])){
                $Logo = $_FILES['Logo'];
            
                if($Logo['error']){
                    die("Falha ao enviar Imagem");
                }
            
                if($Logo['size'] > 5242880){
                    die("Arquivo muito grande! Máximo 5MB");
                }
                $pasta = "arquivo/";
                $nomeDoArquivo = $Logo['name'];
                $novoNomeDoArquivo = uniqid();
                $extensao = strtolower(pathinfo($nomeDoArquivo, PATHINFO_EXTENSION));
                if($extensao != "jpg" && $extensao != "png"){
                    die("O tipo de arquivo não é compatível");
                }
                $path = $pasta . $novoNomeDoArquivo . $extensao;
                $deuCerto = move_uploaded_file($Logo["tmp_name"], $path);
            }


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
                        Telefone_Contador='{$Telefone_Contador}',
                        Logo='{$path}'
                    WHERE
                        id=".$_REQUEST["id"];

            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Editado com sucesso!');</script>";
                print "<script>location.href='?page_cliente=listar_cliente';</script>";   
            }else{
                print "<script>alert('Não foi possível editar.');</script>";
                print "<script>location.href='?page_cliente=listar_cliente';</script>";   
            }

            break;
        case "excluir_cliente":
            $sql = "DELETE FROM cliente WHERE id=".$_REQUEST["id"];
            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Excluido com sucesso!');</script>";
                print "<script>location.href='?page_cliente=listar_cliente';</script>";   
            }else{
                print "<script>alert('Não foi possível excluir.');</script>";
                print "<script>location.href='?page_cliente=listar_cliente';</script>";   
            }

        break;
        
    }

?>


