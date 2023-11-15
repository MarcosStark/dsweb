<?php

	require_once('db_connection.php');

	$name = $_POST['name'];
    $age = $_POST['age'];
    $weight = $_POST['weight'];
    $height = $_POST['height'];
    $date = $_POST['date'];
    $cep = $_POST['cep'];
    $number = $_POST['number'];
    $adjunct = $_POST['adjunct'];
    $telephone = $_POST['telephone'];
	$email = $_POST['email'];

	$objDb = new db();
	$link = $objDb->conecta_mysql();

	$sql = "insert into student(name, age, weight, height, date, cep, number, adjunct, telephone, email) values ('$name', '$age', '$weight', '$height', '$date', '$cep', '$number', '$adjunct', '$telephone', '$email')";
	mysqli_query($link, $sql);

	//executar a query
<<<<<<< HEAD
	/*if(mysqli_query($link, $sql)){
		echo 'Usuário registrado com sucesso!';
	} else {
		echo 'Erro ao registrar o usuário!';
	}*/

	header("Location: student.php");
=======
	if(mysqli_query($link, $sql)){
		echo 'Usuário registrado com sucesso!';
	} else {
		echo 'Erro ao registrar o usuário!';
	}
>>>>>>> c154d83bccfce98c03242df30c566c65589571e7


?>	