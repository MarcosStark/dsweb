<?php
    //session_start();
    include_once('db_connection.php');
    $sql = "SELECT * FROM trainer ORDER BY id DESC";
    $objDb = new db();
	$link = $objDb->conecta_mysql();
    $result = mysqli_query($link, $sql);
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
            <h1>Academia Life Stylle</h1></header>
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
        <table id="tr-bd">
                <tr>
                    <th class="table-bd">ID</th>
                    <th class="table-bd">Nome</th>
                    <th class="table-bd">Telephone</th>
                    <th class="table-bd">Email</th>
                    <th class="table-bd">Escolaridade</th>
                    <th class="table-bd">Formação</th>
                    <th class="table-bd">CEP</th>
                    <th class="table-bd">Logradouro</th>
                    <th class="table-bd">Number</th>
                    <th class="table-bd">Bairro</th>
                    <th class="table-bd">Complemento</th>
                </tr>
                <tr class="teste">
                <?php
                    while($rows = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        echo "<td class='table-bd'>".$rows['id']."</td>";
                        echo "<td class='table-bd'>".$rows['name']."</td>";
                        echo "<td class='table-bd'>".$rows['telephone']."</td>";
                        echo "<td class='table-bd'>".$rows['email']."</td>";
                        echo "<td class='table-bd'>".$rows['education']."</td>";
                        echo "<td class='table-bd'>".$rows['school']."</td>";
                        echo "<td class='table-bd'>".$rows['zipCode']."</td>";
                        echo "<td class='table-bd'>".$rows['publicPlace']."</td>";
                        echo "<td class='table-bd'>".$rows['number']."</td>";
                        echo "<td class='table-bd'>".$rows['neighborhood']."</td>";
                        echo "<td class='table-bd'>".$rows['adjunct']."</td>";
                        echo "<td class='table-bd'>"."<a '<button type='button' href='delete_trainer.php?id=$rows[id]'>"."deletar"."</button>"."</a>"."</td>";
                        echo "<td class='table-bd'>"."<a '<button type='button' href='edit.php?id=$rows[id]'>"."editar"."</button>"."</a>"."</td>";
                        echo "</tr>"; 
                    }         
                ?>
            </tr>
            </table>
    </body><br>
        <a href="index.php"><button type="button">Home</button></a>
        <a href="trainer.php"><button type="button">Cadastrar instrutor</button></a>
</html>