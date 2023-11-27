<?php
   require_once('db_connection.php');
  
    $id = $_GET['id'];

    $objDb = new db();
	$link = $objDb->conecta_mysql();

    $sql = "SELECT * FROM training WHERE id=$id";
    $result = mysqli_query($link, $sql);

        while($rows = mysqli_fetch_array($result)) {

            $name = $rows['name'];
            $series = $rows['series'];
            $level = $rows['level'];
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
        <form action="save_edit_training.php" method="post" id="edit-training">
            <h2>Atualizar Treino</h2><br>
            <table>
                <tr>
                    <td>
                        <label>Nome</label><br>
                        <input id="name" name="name" type="text" value=<?php echo $name;?> placeholder="digite o nome..." required><br>
                        <label>Série</label><br>
                        <input id="series" name="series" type="text" value=<?php echo $series;?> placeholder="digite a série..." required><br>
                        <label>Nível</label><br>
                        <input id="level" name="level" type="text" value=<?php echo $level;?> placeholder="digite o nível..." required><br>
                    </td>
                </tr>
            </table><br>
            <input type="hidden" name="id" value=<?php echo $id;?>>
            <button type="submit">Salvar</button>
            <a href="consult_training.php"><button type="button">Consultar treinos</button></a>
        </form>
    </body>
    <script src="academy.js"></script>
</html> 