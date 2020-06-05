<?php 
require "conexao.php";
//mysqli_close($con);
 ?>
<?php 
	$nome =$_POST['nome'];
	$email =$_POST['email'];
	$senha =$_POST['senha'];
	$data =$_POST['data'];
	$sexo =$_POST['sexo'];

	$sql = "insert into aluno(nome,email,senha,data_nasc,sexo) values('$nome','$email','$senha','$data','$sexo');";
	$query = mysqli_query($con,$query);
	$linhas = mysqli_affected_rows($query);

	//tratando erros
	if($linhas == 1){
		header('location:index.php');
			}
	elseif (empty($_POST['nome']) || $_POST['email'] || $_POST['senha'] || $_POST['data'] || $_POST['sexo']){
	header('location:cadastro.php?msg=erro3');
	}


 ?>
<!DOCTYPE html>
<html>
<head>
	<title> cadastro</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	 	<link rel="stylesheet" type="text/css" href="css.css">

</head>
<body>

</body>
</html>