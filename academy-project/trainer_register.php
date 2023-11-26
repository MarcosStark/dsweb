<?php

	require_once('db_connection.php');

	$name = $_POST['name'];
    $telephone = $_POST['telephone'];
    $email = $_POST['email'];
    $education = $_POST['education'];
    $school = $_POST['school'];
    $zipCode = $_POST['zip-code'];
    $publicPlace = $_POST['public-place'];
    $number = $_POST['number'];
    $neighborhood = $_POST['neighborhood'];
    $adjunct = $_POST['adjunct'];
	$password = $_POST['password'];


	$objDb = new db();
	$link = $objDb->conecta_mysql();

	$sql = "insert into trainer(name, telephone, email, education, school, zipCode, publicPlace, number, neighborhood, adjunct, password) values 
    ('$name', '$telephone', '$email', '$education', '$school', '$zipCode', '$publicPlace', '$number', '$neighborhood', '$adjunct', '$password')";
	mysqli_query($link, $sql);

	//executar a query

	/*if(mysqli_query($link, $sql)){
		echo 'Usuário registrado com sucesso!';
	} else {
		echo 'Erro ao registrar o usuário!';
	}*/

	header("Location: trainer.php");

?>	