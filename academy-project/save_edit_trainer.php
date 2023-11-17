<?php

    require_once('db_connection.php');

    $id = $_POST['id'];
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

    $objDb = new db();
	$link = $objDb->conecta_mysql();

    $sql ="UPDATE trainer 
    SET name='$name', telephone='$telephone', email='$email', education='$education', school='$school', 
    zipCode='$zipCode', publicPlace='$publicPlace', number='$number', neighborhood='$neighborhood', adjunct='$adjunct'
    WHERE id=$id"; 

    $result = mysqli_query($link, $sql);

    header("Location: trainer.php");
?>