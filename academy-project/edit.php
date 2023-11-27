<?php
   require_once('db_connection.php');
  
    $id = $_GET['id'];

    $objDb = new db();
	$link = $objDb->conecta_mysql();

    $sql = "SELECT * FROM student WHERE id=$id";
    $result = mysqli_query($link, $sql);

        while($rows = mysqli_fetch_array($result)) {

            $name = $rows['name'];
            $age = $rows['age'];
            $weight = $rows['weight'];
            $height = $rows['height'];
            $date = $rows['date'];
            $zp = $rows['zipCode'];
            $number = $rows['number'];
            $adjunct = $rows['adjunct'];
            $telephone = $rows['telephone'];
            $email = $rows['email'];

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
        <form action="save_edit.php" method="post" id="std-form">
            <h2>Atualizar Aluno</h2><br>
            <table>
                <tr>
                    <td>
                        <label>Nome</label><br>
                        <input id="std-name" name="name" type="text"  value=<?php echo $name;?> placeholder="digite o nome..." required><br>
                        <label>Idade</label><br>
                        <input id="std-age" name="age"  type="text"  value=<?php echo $age;?> placeholder="digite a idade..." required><br>
                        <label>Peso</label><br>
                        <input id="std-weight" name="weight" type="text"  value=<?php echo $weight;?> placeholder="digite o peso..." required><br>
                        <label>Altura</label><br>
                        <input id="std-height" name="height" type="text"  value=<?php echo $height;?> placeholder="digite a altura..." required><br>
                        <label>Data</label><br>
                        <input id="std-date" name="date" type="data"  value=<?php echo $date;?> placeholder="digite a data..." required><br>     
                    </td>
                    
                    <td>
                        <label>CEP</label><br>
                        <input id="std-zp" name="zp" type="text"  value=<?php echo $zp;?> placeholder="digite o CEP..." required><br>
                        <label>Número</label><br>
                        <input id="std-number" name="number" type="text"  value=<?php echo $number;?> placeholder="digite o número..." required><br>
                        <label>Complemento</label><br>
                        <input id="std-complement" name="adjunct" type="text"  value=<?php echo $adjunct;?> placeholder="digite o complemento..." required><br>
                        <label>Telefone</label><br>
                        <input id="std-telephone" name="telephone" type="tel"  value=<?php echo $telephone;?> ="digite o telefone..." required><br>
                        <label>Email</label><br>
                        <input id="std-email" name="email" type="email"  value=<?php echo $email;?> placeholder="digite o email..." required><br>
                    </td>
                </tr>
            </table><br>
            <input type="hidden" name="id" value=<?php echo $id;?>>
            <button type="submit">Salvar</button>
            <a href="consult_students.php"><button type="button">Consultar alunos</button></a>
        </form>
    </body>
    <script src="academy.js"></script>
</html> 