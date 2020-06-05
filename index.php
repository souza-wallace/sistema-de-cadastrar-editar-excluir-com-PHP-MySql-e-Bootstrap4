<?php 
session_start();

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
<div class="container mt-5 borda">
		<h1 class="text-dark text-center">Login</h1>
		<hr class="w-25 mb-3">
	<div class="d-flex justify-content-center">
		<form class="col-6" action="processa_login.php" method="post">
			<div class="form-group mt-4">
				<input class="form-control" type="text" name="email" placeholder="exemplo@gmail.com">
			</div> 
			<div class="form-group">
				<input class="form-control" type="password" name="senha" placeholder="digite sua senha">
			</div> 
			<?php 
				if(isset($_GET['msg']) && $_GET['msg'] == 'ok'){ ?>
			<p class='text-center text-success'>Sucesso ao cadastrar <br> entre com seu login</p>

			<?php } if(isset($_GET['msg']) && $_GET['msg'] == 'erro4'){ ?>
				<p class="text-center text-danger"> preencha os campos corretamente!</p>
			<?php } ?>

			<?php 
			if(isset($_SESSION['cadastrado']) && $_SESSION['cadastrado'] == 'nao'){   ?>

				<p class="text-center text-danger"> usuário não encontrado ! <br> <a class="text-primary" href="cadastro.php">Cadastre-se</a></p> 

			<?php } if (isset($_SESSION['cadastrado']) && $_SESSION['cadastrado'] == 'erro5') {?>
					<p class="text-danger text-center"> Faça login para continuar</p>
				<?php } ?>

		<button class="btn btn-primary centro mb-3 ">Entrar</button>
		</form>
	</div>
</div>
</body>
</html>