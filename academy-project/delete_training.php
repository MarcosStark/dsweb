<?php

	require_once('db_connection.php');

	$id = $_GET['id'];

	$objDb = new db();
	$link = $objDb->conecta_mysql();

	$sql = "DELETE FROM training WHERE id=$id";  
	mysqli_query($link, $sql);

	header("Location: consult_training.php");


?>	