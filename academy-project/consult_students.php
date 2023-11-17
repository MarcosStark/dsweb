<?php
    //session_start();
    include_once('db_connection.php');
    $sql = "SELECT * FROM student ORDER BY id DESC";
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
        <table id="std-bd">
            <tr>
                <th class="table-bd">NOME</th>
                <th class="table-bd">NOME</th>
                <th class="table-bd">IDADE</th>
                <th class="table-bd">PESO</th>
                <th class="table-bd">ALTURA</th>
                <th class="table-bd">DATA CAD</th>
                <th class="table-bd">TELEFONE</th>
                <th class="table-bd">EMAIL</th>
                <th class="table-bd">CEP</th>
                <th class="table-bd">NUMERO</th>
                <th class="table-bd">COMPLEMENTO</th>
            </tr>
            <tr class="teste">
                <?php
                    while($rows = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        echo "<td class='table-bd'>".$rows['id']."</td>";
                        echo "<td class='table-bd'>".$rows['name']."</td>";
                        echo "<td class='table-bd'>".$rows['age']."</td>";
                        echo "<td class='table-bd'>".$rows['weight']."</td>";
                        echo "<td class='table-bd'>".$rows['height']."</td>";
                        echo "<td class='table-bd'>".$rows['date']."</td>";
                        echo "<td class='table-bd'>".$rows['telephone']."</td>";
                        echo "<td class='table-bd'>".$rows['email']."</td>";
                        echo "<td class='table-bd'>".$rows['zipCode']."</td>";
                        echo "<td class='table-bd'>".$rows['number']."</td>";
                        echo "<td class='table-bd'>".$rows['adjunct']."</td>";
                        echo "<td class='table-bd'>"."<a '<button type='button' href='delete.php?id=$rows[id]'>"."deletar"."</button>"."</a>"."</td>";
                        echo "<td class='table-bd'>"."<a '<button type='button' href='edit.php?id=$rows[id]'>"."editar"."</button>"."</a>"."</td>";
                        echo "</tr>"; 
                    }         
                ?>
            </tr>
        </table><br>
        <a href="index.php"><button type="button">Home</button></a>
        <a href="student.php"><button type="button">Cadastrar alunos</button></a>
</html>