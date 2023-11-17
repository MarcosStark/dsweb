<?php

	require_once('db_connection.php');

	$name = $_POST['name'];
    $series = $_POST['series'];
    $level = $_POST['level'];

	$objDb = new db();
	$link = $objDb->conecta_mysql();

	$sql = "insert into training(name, series, level) values ('$name', '$series', '$level')";
	mysqli_query($link, $sql);

	//executar a query

	/*if(mysqli_query($link, $sql)){
		echo 'Usuário registrado com sucesso!';
	} else {
		echo 'Erro ao registrar o usuário!';
	}*/

	header("Location: training.php");

?>	