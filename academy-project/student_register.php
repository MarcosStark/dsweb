<?php

	require_once('db_connection.php');

	$name = $_POST['name'];
    $age = $_POST['age'];
    $weight = $_POST['weight'];
    $height = $_POST['height'];
    $date = $_POST['date'];
    $zp = $_POST['zp'];
    $number = $_POST['number'];
    $adjunct = $_POST['adjunct'];
    $telephone = $_POST['telephone'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$objDb = new db();
	$link = $objDb->conecta_mysql();

	$sql = "insert into student(name, age, weight, height, date, zipCode, number, adjunct, telephone, email, password) values 
	('$name', '$age', '$weight', '$height', '$date', '$zp', '$number', '$adjunct', '$telephone', '$email', '$password')";
	mysqli_query($link, $sql);

	//executar a query

	/*if(mysqli_query($link, $sql)){
		echo 'Usuário registrado com sucesso!';
	} else {
		echo 'Erro ao registrar o usuário!';
	}*/

	header("Location: student.php");

?>	