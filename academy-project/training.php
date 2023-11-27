<?php
    session_start();

    if(!isset($_SESSION['email'])){
        header('Location: index.php');
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Academia Life Stylle</title>
        <link rel="icon" type="image/x-icon" href="https://img.elo7.com.br/product/main/32D3EB5/adesivo-parede-academia-fitness-crossfit-homem-mulher-halter-homem.jpg">
        <link rel="stylesheet" href="style.css"/> 
    </head>
    <body>
         
        <header> 
            <img src="https://scontent.faju4-2.fna.fbcdn.net/v/t39.30808-6/387735156_865821438395212_7197582003961948565_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=5f2048&_nc_ohc=-RYoAgKTZNsAX8nTrKg&_nc_ht=scontent.faju4-2.fna&oh=00_AfB9vdLluciTxcgkCw_Zd--S--Vf0aCi9DQKqiwFFdLNsg&oe=65670479">
            <h1>Academia Life Stylle</h1></header>
        <nav>
            <ul>
                <li>
                    <ul><a href="index.php">HOME </a></ul>
                    <ul><a href="student.php">ALUNO</a></ul>
                    <ul>TREINO</ul>
                    <ul><a href="trainer.php">INSTRUTOR</a></ul>
                </li>
            </ul>
        </nav> 
        <form class="cad-training" action="training_register.php" method="post">
            <h2>Cadastro Treino</h2><br>
            <table id="cad-training">
                <tr>
                    <td>
                        <label>Nome</label><br>
                        <input id="name" name="name" type="text" placeholder="digite o nome..." required><br>
                        <label>Série</label><br>
                        <input id="series" name="series" type="text" placeholder="digite a série..." required><br>
                        <label>Nível</label><br>
                        <input id="level" name="level" type="text" placeholder="digite o nível..." required><br>
                    </td>
                </tr>
            </table><br>
            <button type="submit">Cadastrar</button>
            <a href="consult_training.php"><button type="button">Consultar treinos</button></a>
        </form>
    </html>           