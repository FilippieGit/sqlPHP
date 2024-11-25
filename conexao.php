<?php 

	$server = 'localhost';
	$user = 'tstaluno';
	$pass = '123456';
	$db = 'dbaluno';

	$con = mysqli_connect($server,$user,$pass,$db);

	if (mysqli_connect_errno()) {

		echo "Erro ao conectar o banco de dados". mysqli_connect_error();

	}else{

		echo "Banco de dados conectado";

		$sql = "insert into tbaluno(alu_nome,alu_email,alu_telcel,alu_cpf)values('Isac dos Santos','isaclindo@gmail.com','1198658965','412.652.098-89')";

		mysqli_query($con, $sql);

		mysqli_close($con);

	}

 ?>