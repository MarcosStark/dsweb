<?php
    $erro = isset($_GET['erro']) ? $_GET['erro'] : 0;
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Academia Life Stylle</title>
        <link rel="icon" type="image/x-icon" href="https://img.elo7.com.br/product/main/32D3EB5/adesivo-parede-academia-fitness-crossfit-homem-mulher-halter-homem.jpg">
        <link rel="stylesheet" href="style.css"/> 
    </head>
    
    <form action="authentication.php" method="post" id="login">
        <label class="form-login">Login ADM</label><br> 
        <label class="form-login">email</label><br>
        <input class="form-login" name="email"><br>
        <label class="form-login">senha</label><br>
        <input class="form-login" name="password"><br>
        <label class="form-login">código adm</label><br>
        <input class="form-login" name="codAdm">
        <button type="submit">Entrar</button><br>
        <?php
            if($erro == 1){
                echo "<font color='white'>Usuário ou senha inválidos(s)</font>";
            }
        ?>
    </form>         
    <form action="authentication_trainer.php" method="post" id="login-trainer">
        <label class="form-login">Login Treinador</label><br> 
        <label class="form-login">email</label><br>
        <input class="form-login" name="email"><br>
        <label class="form-login">senha</label><br>
        <input class="form-login" name="password"><br><br>
        <button type="submit">Entrar</button><br>
        <?php
            if($erro == 1){
                echo "<font color='white'>Usuário ou senha inválidos(s)</font>";
            }
        ?>
    </form>         
    <body>
        <header> 
            <img src="https://scontent.faju4-2.fna.fbcdn.net/v/t39.30808-6/387735156_865821438395212_7197582003961948565_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=5f2048&_nc_ohc=-RYoAgKTZNsAX8nTrKg&_nc_ht=scontent.faju4-2.fna&oh=00_AfB9vdLluciTxcgkCw_Zd--S--Vf0aCi9DQKqiwFFdLNsg&oe=65670479">
            <h1>Academia Life Stylle</h1>
        </header>
        <div id="btns-login">
            <label>Login</label>
            <button type="button" id="btn-adm" onclick="loginAdm()">adm</button>
            <button type="button" id="btn-trainer" onclick="loginTrainer()">treinador</button>
        </div>
        <nav>
            <ul>
                <li>
                    <ul>HOME</ul>
                    <ul><a href="student.php">ALUNO</a></ul>
                    <ul><a href="training.php">TREINO</a></ul>
                    <ul><a href="trainer.php">INSTRUTOR</a></ul>
                </li>
            </ul>
        </nav> 
        <table>
            <tr>
                <th><img id="img-bod" src="https://cdns3.fitfit.fitness/br/media/items/540x280/6419-Life-style-academia-dZ1Zw.jpg"></th>
                <th id="text-bod">A academia de musculação é um espaço dedicado ao treinamento físico, onde os praticantes buscam o desenvolvimento e fortalecimento muscular. Com um ambiente amplo e equipamentos de qualidade, a academia oferece uma variedade de máquinas e pesos livres para atender às necessidades de diferentes tipos de exercícios. Além disso, conta com profissionais qualificados, como instrutores e personal trainers, que auxiliam os alunos em suas rotinas de treino, orientando sobre técnicas corretas de execução e criando programas personalizados de acordo com os objetivos individuais. Com uma atmosfera motivadora e inspiradora, a academia de musculação proporciona um espaço ideal para o aprimoramento físico, promoção da saúde e conquista de resultados satisfatórios.
            </tr>
        </table>
    </body>
    <script src="academy.js"></script>
</html>