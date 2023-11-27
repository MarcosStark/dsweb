<?php
   require_once('db_connection.php');
  
    $id = $_GET['id'];

    $objDb = new db();
	$link = $objDb->conecta_mysql();

    $sql = "SELECT * FROM trainer WHERE id=$id";
    $result = mysqli_query($link, $sql);

        while($rows = mysqli_fetch_array($result)) {

            $name = $rows['name'];
            $telephone = $rows['telephone'];
            $email = $rows['email'];
            $education = $rows['education'];
            $school = $rows['school'];
            $zipCode = $rows['zipCode'];
            $publicPlace = $rows['publicPlace'];
            $number = $rows['number'];
            $neighborhood = $rows['neighborhood'];
            $adjunct = $rows['adjunct'];

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
            <img src="https://scontent.faju4-2.fna.fbcdn.net/v/t39.30808-6/387735156_865821438395212_7197582003961948565_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=5f2048&_nc_ohc=Jy28BazB7S8AX8JFEUk&_nc_ht=scontent.faju4-2.fna&oh=00_AfD1UsYgEnm6HWtMC7Ovi6bePEwBFC1MVl_089wS67VTCQ&oe=655B26F9">
            <h1>Academia Life Stylle</h1>
            <button><a href="exit.php">Sair</a></button>
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
        <form action="save_edit_trainer.php" method="post" id="std-form">
            <h2>Atualizar Instrutor</h2><br>
            <table>
                <tr>
                    <td>
                        <label>Nome</label><br>
                        <input type="text" name="name" value=<?php echo $name;?> placeholder="digite o nome..." required><br>
                        <label>Telefone</label><br>
                        <input type="text" name="telephone" value=<?php echo $telephone;?> placeholder="digite o telefone..." required><br>
                        <label>Email</label><br>
                        <input type="text" name="email" value=<?php echo $email;?> placeholder="digite a email..." required><br>
                        <label>Escolaridade</label><br>
                        <input type="data" name="education" value=<?php echo $education;?> placeholder="digite a escolaridade..." required><br>     
                        <label>Formação</label><br>
                        <input type="data" name="school" value=<?php echo $school;?> placeholder="digite a formação..." required><br>  
                    </td>
                    
                    <td>
                        <label>CEP</label><br>
                        <input type="text" name="zip-code" value=<?php echo $zipCode;?> placeholder="digite o nome..." required><br>
                        <label>Logradouro</label><br>
                        <input type="text" name="public-place" value=<?php echo $publicPlace;?> placeholder="digite a idade..." required><br>
                        <label>Número</label><br>
                        <input type="text" name="number" value=<?php echo $number;?> placeholder="digite o peso..." required><br>
                        <label>Bairro</label><br>
                        <input type="text" name="neighborhood" value=<?php echo $neighborhood;?> placeholder="digite a altura..." required><br>
                        <label>Complemento</label><br>
                        <input type="data" name="adjunct" value=<?php echo $adjunct;?> placeholder="digite a data..." required><br>
                    </td>
                </tr>
            </table><br>
            <input type="hidden" name="id" value=<?php echo $id;?>>
            <button type="submit">Salvar</button>
            <a href="consult_trainer.php"><button type="button">Consultar instrutores</button></a>
        </form>
    </body>
    <script src="academy.js"></script>
</html> 