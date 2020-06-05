<?php 
require "conexao.php";
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Universidade</title>
 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 	<link rel="stylesheet" type="text/css" href="css.css">
 </head>
 <body>
 	<div class="container mt-3  borda">
 	<div class="container">
 		<h1 class="display-4 text-center mt-4"> cadastro</h1>
 		<hr class="w-25">
 	</div>
 		<div class="row">
 			<form class="form-group col-sm-12 " action="processa_cadastro.php" method="post">
 				<input type="text" name="nome" placeholder="Nome completo" class="form-control m-2 mt-4">
 				<input type="email" name="email" placeholder="exemplo@gmail.com" class="form-control m-2 mt-4">
 				<input type="password" name="senha" placeholder="Digite uma senha" class="form-control m-2 mt-4">
 				<input type="date" name="data" placeholder="data/de/nascimento" class="form-control m-2 mt-4">
 				<select name="sexo" class="form-control m-2 ">
 					<option>Escolha</option>
 					<option>Masculino</option>
 					<option>Feminino</option>
 					<option>Outros</option>
 				</select>
 				<?php 
 				if(isset($_GET['msg']) && $_GET['msg'] == 'erro1'){ ?>
 					<p class="text-center text-danger mt-4">Preencha todos os campos</p>
 				<?php } 
 				if(isset($_GET['msg']) && $_GET['msg'] == 'erro3'){ ?>
 					<p class="text-center text-danger mt-4"> Usuário já Cadastrado</p>
 				<?php } ?>
 				<button class="btn btn-primary centro mt-2" type="submit"> cadastrar</button>
 			</form>
 		</div>
 	</div>
 </body>
 </html>