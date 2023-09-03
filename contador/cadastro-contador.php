<?php
include("../config.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col mt-5">
                <h1>Cadastro</h1>
                <form action="?page_contador=salvar_contador" method="POST" >
                    <input type="hidden" name="acao" value="cadastrar">
                    <div class="mb-3">
                        <label for="">Nome da Empresa</label>
                        <input type="text" name="nome_empresa" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Data de fundação da empresa</label>
                        <input type="date" name="data_fundacao_empresa" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Telefone da Empresa</label>
                        <input type="tel" id="Telefone_empresa" class="form-control" name="Telefone_empresa" pattern="\([0-9]{2}\)[0-9]{4}(-)?[0-9]{4}" placeholder="(xx)xxxx-xxxx" required />
                    </div>
                    <div class="mb-3">
                        <label for="">Nome do contador</label>
                        <input type="text" name="Nome_contador" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Data de nascimento do contador</label>
                        <input type="date" name="data_aniversario_contador" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">CRC</label>
                        <input type="text" name="CRC" class="form-control" pattern="1[A-Z]{2}[0-9]{6}/O-[0-9]" placeholder="1UFXXXXXX/O-X">
                    </div>
                    <div class="mb-3">
                        <label for="">E-mail do contador</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Telefone do contador</label>
                        <input type="tel" id="Telefone_Contador" class="form-control" name="Telefone_Contador" pattern="\([0-9]{2}\)[0-9]{4}(-)?[0-9]{4}" placeholder="(xx)xxxx-xxxx" required />
                    </div>
                    <div class="mb-3">
                        <label for="">Senha</label>
                        <input type="password" name="confirmacao_senha" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Confirme sua senha</label>
                        <input type="password" name="senha" class="form-control">
                    </div>
                    
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary mb-3">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col mt-5">
                <?php
                    
                    switch(@$_REQUEST["page_contador"]){
                        case "listar_contador":
                            include("listar-contador.php");
                        break;
                        case "novo_contador":
                            include("cadastro-contador.php");
                        break;
                        case "salvar_contador":
                            include("salvar-contador.php");
                        break;
                        case "editar_contador":
                            include("editar-contador.php");
                        break; 
                    }
                ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>
</html>

