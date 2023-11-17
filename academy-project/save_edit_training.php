<?php

    require_once('db_connection.php');

    $id = $_POST['id'];
    $name = $_POST['name'];
    $series = $_POST['series'];
    $level = $_POST['level'];

    $objDb = new db();
	$link = $objDb->conecta_mysql();

    $sql ="UPDATE training 
    SET name='$name', series='$series', level='$level'
    WHERE id=$id"; 

    $result = mysqli_query($link, $sql);

    header("Location: consult_training.php");
?>