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
            <h1>Academia Life Stylle</h1>
        </header>
        <nav>
            <ul>
                <li>
                    <ul><a href="index.php">HOME </a></ul>
                    <ul>ALUNO</ul>
                    <ul><a href="training.php">TREINO</a></ul>
                    <ul><a href="trainer.php">INSTRUTOR</a></ul>

                </li>
            </ul>
        </nav> 
        <form action="student_register.php" method="post" id="std-form">
            <h2>Cadastro Aluno</h2><br>
            <table>
                <tr>
                    <td>
                        <label>Nome</label><br>
                        <input id="std-name" name="name" type="text" placeholder="digite o nome..." required><br>
                        <label>Idade</label><br>
                        <input id="std-age" name="age"  type="text" placeholder="digite a idade..." required><br>
                        <label>Peso</label><br>
                        <input id="std-weight" name="weight" type="text" placeholder="digite o peso..." required><br>
                        <label>Altura</label><br>
                        <input id="std-height" name="height" type="text" placeholder="digite a altura..." required><br>
                        <label>Data</label><br>
                        <input id="std-date" name="date" type="data" placeholder="digite a data..." required><br>     
                    </td>
                    
                    <td>
                        <label>CEP</label><br>
                        <input id="std-zp" name="zp" type="text" placeholder="digite o CEP..." required><br>
                        <label>Número</label><br>
                        <input id="std-number" name="number" type="text" placeholder="digite o número..." required><br>
                        <label>Complemento</label><br>
                        <input id="std-complement" name="adjunct" type="text" placeholder="digite o complemento..." required><br>
                        <label>Telefone</label><br>
                        <input id="std-telephone" name="telephone" type="tel" placeholder="digite o telefone..." required><br>
                        <label>Email</label><br>
                        <input id="std-email" name="email" type="email" placeholder="digite o email..." required><br>
                        <label>Senha</label><br>
                        <input id="std-password" name="password" type="password" placeholder="digite a senha..." required><br>
                    </td>
                </tr>
            </table><br>
            <button type="submit">Cadastrar</button>
            <a href="consult_students.php"><button type="button">Consultar alunos</button></a>

        </form>

    </body>
    <script src="academy.js"></script>
</html>           