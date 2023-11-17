<?php

	require_once('db_connection.php');

	$name = $_POST['name'];
    $range = $_POST['range'];
    $level = $_POST['level'];

	$objDb = new db();
	$link = $objDb->conecta_mysql();

	$sql = "insert into training(name, range, level) values ('$name', '$range', '$level)";
	mysqli_query($link, $sql);

	//executar a query

	/*if(mysqli_query($link, $sql)){
		echo 'Usuário registrado com sucesso!';
	} else {
		echo 'Erro ao registrar o usuário!';
	}*/

	header("Location: student.php");

?>	