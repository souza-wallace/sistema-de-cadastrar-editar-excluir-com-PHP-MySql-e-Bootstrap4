<?php 
	require_once 'conexao.php';
	

	$email = $_POST['email'];
	$senha = sha1($_POST['senha']);
	$consulta = "select * from aluno where email = '$email';";
	$query= mysqli_query($con,$consulta);
	$retorno= mysqli_num_rows($query);
	
	if(empty($_POST['senha'] ||  $_POST['email'])){
		header('location:index.php?msg=erro4');
	}elseif($retorno == 0){
		$_SESSION['cadastrado'] = 'nao';
		header('location: index.php');
	}else{
		$_SESSION['cadastrado'] = 'sim';
		header('location: consulta.php');
	}
 ?>
 <!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 	<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
<a href="consulta.php" class="nav-link m-5">consultar registros</a>
</body>
</html>