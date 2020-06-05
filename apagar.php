<?php 
require 'conexao.php';

			if(isset($_GET['delete'])){
				$id_aluno =$_GET['delete'];
				$sql = "delete from aluno where id_aluno = $id_aluno";
				$query = mysqli_query($con,$sql);
			}
		 ?>