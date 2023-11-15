<?php
    //session_start();
    include_once('db_connection.php');
    $sql = "SELECT * FROM student ORDER BY id ASC";
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
            <img src="https://scontent.faju4-2.fna.fbcdn.net/v/t39.30808-6/387735156_865821438395212_7197582003961948565_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=5f2048&_nc_ohc=BgHcax9NtOQAX9wtDyy&_nc_ht=scontent.faju4-2.fna&oh=00_AfAi3m-WZFmiYjBZK8k0UEc7NuListB-DmMHeY1c46MfHA&oe=654171B9">
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
                        <input id="std-zp" name="cep" type="text" placeholder="digite o CEP..." required><br>
                        <label>Número</label><br>
                        <input id="std-number" name="number" type="text" placeholder="digite o número..." required><br>
                        <label>Complemento</label><br>
                        <input id="std-complement" name="adjunct" type="text" placeholder="digite o complemento..." required><br>
                        <label>Telefone</label><br>
                        <input id="std-telephone" name="telephone" type="tel" placeholder="digite o telefone..." required><br>
                        <label>Email</label><br>
                        <input id="std-email" name="email" type="email" placeholder="digite o email..." required><br>
                    </td>
                </tr>
            </table><br>
            <button type="submit">Cadastrar</button>
            <button type="button" onclick="consultStudents()">Consultar alunos </button>

        </form>
        <table id="std-bd">
            <tr>
                <th class="table-bd">ID</th>
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
                        echo "<td class='table-bd'>".$rows['cep']."</td>";
                        echo "<td class='table-bd'>".$rows['number']."</td>";
                        echo "<td class='table-bd'>".$rows['adjunct']."</td>";
                        echo "<td class='table-bd'>"."<a '<button type='button' class='button_bd' onclick='deleteStdReg()' href='delete.php?id=$rows[id]'>"."deletar"."</button>"."</a>"."</td>";
                        echo "<td class='table-bd'>"."<a '<button type='button' class='button_bd' href='edit.php?id=$rows[id]'>"."editar"."</button>"."</a>"."</td>";
                        echo "</tr>"; 
                    }         
                ?>
            </tr>
        </table>
    </body>
    <script src="academy.js"></script>
</html>           