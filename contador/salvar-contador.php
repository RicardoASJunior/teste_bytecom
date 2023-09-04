<?php
include('../config.php');
    switch ($_REQUEST["acao"]){
        case "cadastrar":
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
            
            
            $senha = $_POST["senha"];

            $nome_empresa = $_POST["nome_empresa"];
            $data_fundacao_empresa = $_POST["data_fundacao_empresa"];
            $Telefone_empresa = $_POST["Telefone_empresa"];
            $Nome_contador = $_POST["Nome_contador"];
            $data_aniversario_contador = $_POST["data_aniversario_contador"];
            $CRC = $_POST["CRC"];
            $email = $_POST["email"];
            $Telefone_Contador = $_POST["Telefone_Contador"];
            $hashSenha = password_hash($senha, PASSWORD_DEFAULT);
            $data_cadastro = date('y/m/d');

            

            $sql = "SELECT * FROM contador WHERE email = ? OR CRC = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ss", $email, $CRC);
            $stmt->execute();

            $res = $stmt->get_result();

            if ($res->num_rows > 0) {
                print "<script>alert('Usuário já está cadastrado!.');</script>";
                print "<script>location.href='./cadastro-contador.php';</script>";  
                
            } else {
                $sql = "INSERT INTO contador (nome_empresa,
                                            data_fundacao_empresa, 
                                            Telefone_empresa,
                                            Nome_contador, 
                                            data_aniversario_contador, 
                                            CRC,
                                            email, 
                                            Telefone_Contador,
                                            senha,
                                            data_cadastro,
                                            Logo ) 
                                            VALUES ('{$nome_empresa}',
                                            '{$data_fundacao_empresa}',
                                            '{$Telefone_empresa}',
                                            '{$Nome_contador}',
                                            '{$data_aniversario_contador}',
                                            '{$CRC}',
                                            '{$email}','{$Telefone_Contador}',
                                            '{$hashSenha}',
                                            '{$data_cadastro}',
                                            '{$path}'
                                            )";

                $res = $conn->query($sql);

                if($res==true){
                print "<script>alert('Cadastrado com sucesso!');</script>";  
                print "<script>location.href='../index.php';</script>";  
                }else{
                print "<script>alert('Não foi possível cadastrar.');</script>";
                }
            }

        $stmt->close();
        break;
    }
?>
