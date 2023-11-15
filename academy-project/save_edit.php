<?php

    require_once('db_connection.php');

    $id = $_POST['id'];
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

    $sql ="UPDATE student 
    SET name='$name', age='$age', weight='$weight', height='$height', date='$date', 
    cep='$cep', number='$number', adjunct='$adjunct', telephone='$telephone', email='$email'
    WHERE id=$id"; 

    $result = mysqli_query($link, $sql);

    header("Location: student.php");
?>