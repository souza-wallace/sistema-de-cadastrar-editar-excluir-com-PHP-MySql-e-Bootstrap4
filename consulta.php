
<?php 
require 'conexao.php';

 ?>
<?php 
	/*if ( isset($filtro)) {
		$filtro =  $_GET['pesquisar'];
	echo "digite o que deseja pesquisar";
	}*/


$sql = "select * from aluno";
$resultado = mysqli_query($con,$sql);
$registros = mysqli_num_rows($resultado);

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
	
	<form method="get">

		<div class="container col-5 m-5">
		filtrar por nome: <input type="text" placeholder="digite um nome para pesquisar" name="pesquisar" class="form-control ">
		<button class="btn btn-primary mt-3">pesquisar</button>
	</form>
		<?php 
		echo "<p class='mt-5'>total de $registros registros</p>";
		//estrutura de repetição para exibir dados

		while($row = mysqli_fetch_assoc($resultado)){ ?>	
		 <div class='container bg-light text-dark ml-1'> 
		 	<div class='d-flex justify-content-end'>
				<a href="consulta.php?edit=<?php echo $row['id_aluno'];?>" class="btn btn-info m-1"> editar</a>
				<a href="apagar.php?delete=<?php echo $row['id_aluno'];?> " class="btn btn-danger m-1"> excluir</a>
				</div>
			
			<?php echo $row['id_aluno'];?><br>	
			<?php echo $row['nome'];?><br>
			<?php echo $row['email'];?><br>	
			<?php echo $row['sexo'];?><br>
			
			  <?php } ?>
		</div>
			

				

			
	 
	
</body>
</html>
