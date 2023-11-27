<?php

	require_once('db_connection.php');

	$name = $_POST['name'];
    $series = $_POST['series'];
    $level = $_POST['level'];

	$objDb = new db();
	$link = $objDb->conecta_mysql();

	$sql = "insert into training(name, series, level) values ('$name', '$series', '$level')";
	mysqli_query($link, $sql);

	header("Location: training.php");

?>	