<?php
    include('./login/verifica-login.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="?page_cliente=listar_cliente">Clientes</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page_cliente" href="?page_cliente=novo_cliente">Cadastro Cliente</a>
            </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link active" aria-current="" href="./login/logout.php">Sair</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>
    
    <div class="container">
        <div class="row">
            <div class="col mt-5">
                <?php
                include("config.php");
                    switch(@$_REQUEST["page_cliente"]){
                        case "listar_cliente":
                            include("./cliente/listar-cliente.php");
                        break;
                        case "novo_cliente":
                             include("./cliente/cadastro-cliente.php");
                        break;
                        case "salvar_cliente":
                            include("./cliente/salvar-cliente.php");
                        break;
                        case "editar_cliente":
                            include("./cliente/editar-cliente.php");
                        break;
                        default:
                            header('location: dashboard.php?page_cliente=listar_cliente');
                    }
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

            </div>
        </div>

    </div>

    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>