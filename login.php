<?php
    session_start();
    
    
    if(empty($_POST) or (empty($_POST["email"]) or (empty($_POST["senha"])))){
        print "<script>location.href='index.php';</script>";
    }

    include('config.php');

    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $sql = "SELECT * FROM contador
    WHERE email = '($email)'
    AND senha ='($senha)'";

    $res = $conn->query($sql) or die($conn->error);

    $row = $res->fetch_object();

    if($res->num_rows > 0){
        $_SESSION["email"] = $email;
        $_SESSION["Nome_contador"] = $row->Nome_contador;
        print "<script>location.href='dashboard.php';</script>";
    }else{
        print "<script>alert('Usuario e/ou senha incorreto');</script>";
        print "<script>location.href='index.php';</script>";
    }
