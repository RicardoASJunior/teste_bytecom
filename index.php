<?php
session_start();

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <title>Sistema de Login</title>
</head>
<body class="">
    <div class="container">
        <div class="row ">
            <div class="mt-5 col-lg-4 offset-lg-4">
                <div class="card">
                    <div class="card-body ">
                        <h1 class="text-center">LOGIN</h1>
                        <form action="./login/login.php" method="POST">
                            <?php
                            if(isset($_SESSION['nao_autenticado'])):
                            ?>
                            <div class="bg-danger border rounded m-2 p-2 text-white text-center">
                                Usuário e/ou senha inválidos
                            </div>
                            <?php
                            endif;
                            unset($_SESSION['nao_autenticado']);
                            ?>
                            <div class="mb-3">
                                <label for="">Email do usuário</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Senha</label>
                                <input type="password" name="senha" class="form-control">
                            </div>
                            <div class="mb-3 d-flex justify-content-between">
                                <button type="submit" class="btn btn-primary">Entrar</button>
                                <button class="btn btn-primary"><a href="./contador/cadastro-contador.php" class="text-white">Novo Cadastro</a></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
   

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>
</html>