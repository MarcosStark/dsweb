<!DOCTYPE html>
<html>
    <head>
        <title>Academia Life Stylle</title>
        <link rel="icon" type="image/x-icon" href="https://img.elo7.com.br/product/main/32D3EB5/adesivo-parede-academia-fitness-crossfit-homem-mulher-halter-homem.jpg">
        <link rel="stylesheet" href="style.css"/> 
    </head>
    <body>      
        <form action="authentication_trainer.php" method="post" id="login"> 
                <label>email</label><br>
                <input name="email"><br>
                <label>senha</label><br>
                <input name="password">
                <button type="submit">Login</button>
        </form> 
        <header> 
            <img src="https://scontent.faju4-2.fna.fbcdn.net/v/t39.30808-6/387735156_865821438395212_7197582003961948565_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=5f2048&_nc_ohc=Jy28BazB7S8AX8JFEUk&_nc_ht=scontent.faju4-2.fna&oh=00_AfD1UsYgEnm6HWtMC7Ovi6bePEwBFC1MVl_089wS67VTCQ&oe=655B26F9">
            <h1>Academia Life Stylle</h1></header>
        <nav>
            <ul>
                <li>
                    <ul><a href="index.php">HOME</a></ul>
                    <ul><a href="student.php">ALUNO</a></ul>
                    <ul><a href="training.php">TREINO</a></ul>
                    <ul>INSTRUTOR</ul>
                </li>
            </ul>
        </nav> 
        <form action="trainer_register.php" method="post">
            <h2>Cadastro Instrutor</h2><br>
            <table>
                <tr>
                    <td>
                        <label>Nome</label><br>
                        <input type="text" name="name" placeholder="digite o nome..." required><br>
                        <label>Telefone</label><br>
                        <input type="text" name="telephone" placeholder="digite o telefone..." required><br>
                        <label>Email</label><br>
                        <input type="text" name="email" placeholder="digite a email..." required><br>
                        <label>Escolaridade</label><br>
                        <input type="data" name="education" placeholder="digite a escolaridade..." required><br>     
                        <label>Formação</label><br>
                        <input type="data" name="school" placeholder="digite a formação..." required><br>  
                    </td>
                    
                    <td>
                        <label>CEP</label><br>
                        <input type="text" name="zip-code" placeholder="digite o nome..." required><br>
                        <label>Logradouro</label><br>
                        <input type="text" name="public-place" placeholder="digite a idade..." required><br>
                        <label>Número</label><br>
                        <input type="text" name="number" placeholder="digite o peso..." required><br>
                        <label>Bairro</label><br>
                        <input type="text" name="neighborhood" placeholder="digite a altura..." required><br>
                        <label>Complemento</label><br>
                        <input type="data" name="adjunct" placeholder="digite a data..." required><br>
                        <label>Senha</label><br>
                        <input type="password" name="password" placeholder="digite a senha..." required><br>
                    </td>
                </tr>
            </table><br>
            <button type="submit">Cadastrar</button>
            <a href="consult_trainer.php"><button type="button">Consultar instrutores</button></a>
        </form>
    </body>
</html>           