<?php
    session_start();

    require_once('db_connection.php'); 

    $email = $_POST['email'];
    $password = $_POST['password'];
   
    $objDb = new db();
	$link = $objDb->conecta_mysql();

    $sql = "SELECT * FROM adm WHERE email = '$email' AND password = '$password'";
    $result =  mysqli_query($link, $sql);

    $user_data = mysqli_fetch_array($result);

    if($result){

        if(isset($user_data['email'])){

            $_SESSION['email'] = $user_data['email'];

            header('Location: index.php');

            var_dump($user_data);

        } else {

            header('Location: index.php?erro=1');
        }
        
    } else {
        echo "Erro na execução da consulta, favor entrar em contato com os responsáveis pelo site.";
    }
?>