<?php

	require_once('db_connection.php');

	$id = $_GET['id'];

	$objDb = new db();
	$link = $objDb->conecta_mysql();

	$sql = "DELETE FROM trainer WHERE id=$id";  
	mysqli_query($link, $sql);

	//executar a query
	/*if(mysqli_query($link, $sql)){
		echo 'Usuário registrado com sucesso!';
	} else {
		echo 'Erro ao registrar o usuário!';
	}*/
	header("Location: consult_trainer.php");


?>	