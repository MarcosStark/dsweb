<?php
    require_once('db_connection.php'); 

    $email = $_POST['email'];
    $password = $_POST['password'];
   
    $objDb = new db();
	$link = $objDb->conecta_mysql();

    $sql = "SELECT * FROM student WHERE email = '$email' AND password = '$password'";
    mysqli_query($link, $sql);

?>