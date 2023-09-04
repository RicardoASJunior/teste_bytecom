<?php
session_start();
include('../config.php');
 
if(empty($_POST['email']) || empty($_POST['senha'])) {
	header('Location: index.php');
	exit();
}
 
$email = mysqli_real_escape_string($conn, $_POST['email']);
$senha = mysqli_real_escape_string($conn, $_POST['senha']);
 
$query = "select * from contador where email = '{$email}'";

$result = mysqli_query($conn, $query);

$row = mysqli_num_rows($result);
 
if($row == 1) {
	while($row = mysqli_fetch_assoc($result)){
		if (password_verify($senha, $row['senha'])) {
			$_SESSION['email'] = $email;
			$_SESSION['id'] = $row['id'];
			$_SESSION['senha'] = $senha;
			header('Location: ../dashboard.php');
			exit();
		}else {
			$_SESSION['nao_autenticado'] = true;
			header('Location: ../index.php');
			exit();
		}

	}
}

